/**
 * @license
 * Copyright Google Inc. All Rights Reserved.
 *
 * Use of this source code is governed by an MIT-style license that can be
 * found in the LICENSE file at https://angular.io/license
 */
"use strict";
var timers_1 = require("../common/timers");
var utils_1 = require("../common/utils");
var define_property_1 = require("./define-property");
var event_target_1 = require("./event-target");
var property_descriptor_1 = require("./property-descriptor");
var register_element_1 = require("./register-element");
var set = 'set';
var clear = 'clear';
var blockingMethods = ['alert', 'prompt', 'confirm'];
var _global = typeof window === 'object' && window || typeof self === 'object' && self || global;
timers_1.patchTimer(_global, set, clear, 'Timeout');
timers_1.patchTimer(_global, set, clear, 'Interval');
timers_1.patchTimer(_global, set, clear, 'Immediate');
timers_1.patchTimer(_global, 'request', 'cancel', 'AnimationFrame');
timers_1.patchTimer(_global, 'mozRequest', 'mozCancel', 'AnimationFrame');
timers_1.patchTimer(_global, 'webkitRequest', 'webkitCancel', 'AnimationFrame');
for (var i = 0; i < blockingMethods.length; i++) {
    var name = blockingMethods[i];
    utils_1.patchMethod(_global, name, function (delegate, symbol, name) {
        return function (s, args) {
            return Zone.current.run(delegate, _global, args, name);
        };
    });
}
event_target_1.eventTargetPatch(_global);
property_descriptor_1.propertyDescriptorPatch(_global);
utils_1.patchClass('MutationObserver');
utils_1.patchClass('WebKitMutationObserver');
utils_1.patchClass('FileReader');
define_property_1.propertyPatch();
register_element_1.registerElementPatch(_global);
// Treat XMLHTTPRequest as a macrotask.
patchXHR(_global);
var XHR_TASK = utils_1.zoneSymbol('xhrTask');
var XHR_SYNC = utils_1.zoneSymbol('xhrSync');
var XHR_LISTENER = utils_1.zoneSymbol('xhrListener');
var XHR_SCHEDULED = utils_1.zoneSymbol('xhrScheduled');
function patchXHR(window) {
    function findPendingTask(target) {
        var pendingTask = target[XHR_TASK];
        return pendingTask;
    }
    function scheduleTask(task) {
        self[XHR_SCHEDULED] = false;
        var data = task.data;
        // remove existing event listener
        var listener = data.target[XHR_LISTENER];
        if (listener) {
            data.target.removeEventListener('readystatechange', listener);
        }
        var newListener = data.target[XHR_LISTENER] = function () {
            if (data.target.readyState === data.target.DONE) {
                if (!data.aborted && self[XHR_SCHEDULED]) {
                    task.invoke();
                }
            }
        };
        data.target.addEventListener('readystatechange', newListener);
        var storedTask = data.target[XHR_TASK];
        if (!storedTask) {
            data.target[XHR_TASK] = task;
        }
        sendNative.apply(data.target, data.args);
        self[XHR_SCHEDULED] = true;
        return task;
    }
    function placeholderCallback() { }
    function clearTask(task) {
        var data = task.data;
        // Note - ideally, we would call data.target.removeEventListener here, but it's too late
        // to prevent it from firing. So instead, we store info for the event listener.
        data.aborted = true;
        return abortNative.apply(data.target, data.args);
    }
    var openNative = utils_1.patchMethod(window.XMLHttpRequest.prototype, 'open', function () { return function (self, args) {
        self[XHR_SYNC] = args[2] == false;
        return openNative.apply(self, args);
    }; });
    var sendNative = utils_1.patchMethod(window.XMLHttpRequest.prototype, 'send', function () { return function (self, args) {
        var zone = Zone.current;
        if (self[XHR_SYNC]) {
            // if the XHR is sync there is no task to schedule, just execute the code.
            return sendNative.apply(self, args);
        }
        else {
            var options = { target: self, isPeriodic: false, delay: null, args: args, aborted: false };
            return zone.scheduleMacroTask('XMLHttpRequest.send', placeholderCallback, options, scheduleTask, clearTask);
        }
    }; });
    var abortNative = utils_1.patchMethod(window.XMLHttpRequest.prototype, 'abort', function (delegate) { return function (self, args) {
        var task = findPendingTask(self);
        if (task && typeof task.type == 'string') {
            // If the XHR has already completed, do nothing.
            if (task.cancelFn == null) {
                return;
            }
            task.zone.cancelTask(task);
        }
        // Otherwise, we are trying to abort an XHR which has not yet been sent, so there is no task
        // to cancel. Do nothing.
    }; });
}
/// GEO_LOCATION
if (_global['navigator'] && _global['navigator'].geolocation) {
    utils_1.patchPrototype(_global['navigator'].geolocation, ['getCurrentPosition', 'watchPosition']);
}
//# sourceMappingURL=browser.js.map