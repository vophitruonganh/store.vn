<?php $__env->startSection('main-content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h2 class="text-center">REGISTER</h1></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/register')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <div class="col-lg-6">
                            <div class="form-group<?php echo e($errors->has('firstname') ? ' has-error' : ''); ?>">
                                <label for="lastname" class="col-md-4 control-label">First Name</label>

                                <div class="col-md-6">
                                    <input id="lastname" type="text" class="form-control" name="firstname" value="<?php echo e(old('firstname')); ?>" required autofocus>

                                    <?php if($errors->has('firstname')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('firstname')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('lastname') ? ' has-error' : ''); ?>">
                                <label for="lastname" class="col-md-4 control-label">Last Name</label>

                                <div class="col-md-6">
                                    <input id="lastname" type="text" class="form-control" name="lastname" value="<?php echo e(old('lastname')); ?>" required autofocus>

                                    <?php if($errors->has('lastname')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('lastname')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('address') ? ' has-error' : ''); ?>">
                                <label for="address" class="col-md-4 control-label">Address</label>

                                <div class="col-md-6">
                                    <input id="address" type="text" class="form-control" name="address" value="<?php echo e(old('address')); ?>" required autofocus>

                                    <?php if($errors->has('address')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('address')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('province') ? ' has-error' : ''); ?>">
                                <label for="province" class="col-md-4 control-label">Province</label>
                                <div class="col-md-6">
                                    <select id="province"  class="form-control" name="province">
                                        <option value="1">Hà Nội</option>
                                        <option value="2" selected>Hồ Chí Minh</option>
                                    </select>
                                    <?php if($errors->has('province')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('province')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('district') ? ' has-error' : ''); ?>">
                                <label for="district" class="col-md-4 control-label">District</label>
                                <div class="col-md-6">
                                    <select id="district"  class="form-control" name="district">
                                        <option value="1">Hà Nội</option>
                                        <option value="2" selected>Hồ Chí Minh</option>
                                    </select>
                                    <?php if($errors->has('district')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('district')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('dob') ? ' has-error' : ''); ?>">
                                <label for="dob" class="col-md-4 control-label">Date Of Birth</label>

                                <div class="col-md-6">
                                    <input id="dob" type="date" class="form-control" name="dob" value="<?php echo e(old('dob')); ?>" required autofocus>

                                    <?php if($errors->has('dob')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('dob')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group<?php echo e($errors->has('sex') ? ' has-error' : ''); ?>">
                                <label for="sex" class="col-md-4 control-label">Sex</label>
                                <div class="col-md-6">
                                    <select id="sex"  class="form-control" name="sex">
                                        <option value="1">Nam</option>
                                        <option value="0">Nữ</option>
                                    </select>
                                    <?php if($errors->has('sex')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('sex')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group<?php echo e($errors->has('idcard') ? ' has-error' : ''); ?>">
                                <label for="idcard" class="col-md-4 control-label">ID Card</label>

                                <div class="col-md-6">
                                    <input id="idcard" type="text" class="form-control" name="idcard" value="<?php echo e(old('idcard')); ?>" required autofocus>

                                    <?php if($errors->has('idcard')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('idcard')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('phone') ? ' has-error' : ''); ?>">
                                <label for="phone" class="col-md-4 control-label">Phone Number</label>

                                <div class="col-md-6">
                                    <input id="phone" type="tel" class="form-control" name="phone" value="<?php echo e(old('phone')); ?>" required autofocus>

                                    <?php if($errors->has('phone')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('phone')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>

                                    <?php if($errors->has('email')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('email')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    <?php if($errors->has('password')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('password')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-5">
                                <div class="btn btn-group">
                                    <button type="submit" class="btn btn-success">
                                        REGISTER
                                    </button>
                                    <button type="reset" class="btn btn-danger">
                                        RESET
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>