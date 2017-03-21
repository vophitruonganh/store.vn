<?php $__env->startSection('main-content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading text-center">

                    <h1 style="color:#05B7C7; text-shadow: 0px 1px 1px #aaa; line-height: 1.3;"><img class="img-responsive" style="max-width: 250px;" src="<?php echo e(url('images/logo.png')); ?>" alt=""></h1>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/register')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <div class="col-lg-12">
                            <div class="form-group<?php echo e($errors->has('firstname') ? ' has-error' : ''); ?>">
                                <label for="lastname" class="col-md-4 control-label">Họ</label>

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
                                <label for="lastname" class="col-md-4 control-label">Tên</label>

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
                                <label for="address" class="col-md-4 control-label">Địa chỉ</label>

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
                                <label for="province" class="col-md-4 control-label">Quận</label>
                                <div class="col-md-6">
                                    <select id="province"  class="form-control" name="province">
                                    <?php $__currentLoopData = $provinces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $province): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                        <option value="<?php echo e($province->id); ?>"><?php echo e($province->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                    </select>
                                    <?php if($errors->has('province')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('province')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('district_id') ? ' has-error' : ''); ?>">
                                <label for="district" class="col-md-4 control-label">Huyện</label>
                                <div class="col-md-6">
                                    <select id="province"  class="form-control" name="district">
                                    <?php $__currentLoopData = $districts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $district): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                        <option value="<?php echo e($district->id); ?>"><?php echo e($district->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                    </select>
                                    <?php if($errors->has('district_id')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('district_id')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('dob') ? ' has-error' : ''); ?>">
                                <label for="dob" class="col-md-4 control-label">Ngày sinh</label>

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
                        <div class="col-lg-12">
                            <div class="form-group<?php echo e($errors->has('sex') ? ' has-error' : ''); ?>">
                                <label for="sex" class="col-md-4 control-label">Giới tính</label>
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
                                <label for="idcard" class="col-md-4 control-label">Số chứng minh thư</label>

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
                                <label for="phone" class="col-md-4 control-label">Số điện thoại</label>

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
                                <label for="email" class="col-md-4 control-label">Email</label>

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
                                <label for="password" class="col-md-4 control-label">Mật khẩu</label>

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
                                <label for="password-confirm" class="col-md-4 control-label">Nhập lại mật khẩu</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-4">
                                <div class="btn btn-group">
                                    <button type="submit" class="btn btn-success">
                                        ĐĂNG KÝ
                                    </button>
                                    <button type="reset" class="btn btn-danger">
                                        NHẬP LẠI
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

<?php echo $__env->make('auth.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>