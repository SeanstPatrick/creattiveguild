<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Creative Guild</title>

        <!-- Fonts
            creativeguild
            ev21dl43@
        -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="<?php echo e(asset('css/creativeguild.css')); ?>" rel="stylesheet" type="text/css" >

    </head>
    <body>
        <div class="container">
            <div class="profile-details">
                <span class="profile-pic">
                    <img src="<?php echo e(asset($leads['profile_picture'])); ?>" alt="profile pic" width="110px" >
                </span>
                <span class="username"><?php echo e($leads['name']); ?></span>
                <span class="bio-title">Bio</span>
                <span class="bio">
                    <?php echo e($leads['bio']); ?>

                </span>
                <span class="p-title">Phone</span>
                <span class="phone"><?php echo e($leads['phone']); ?></span>
                <span class="e-title">Email</span>
                <span class="email"><?php echo e($leads['email']); ?></span>
            </div>

            <?php $__currentLoopData = $leads['album']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sites): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="column">
                <div class="p-6">
                        <span class="img">
                            <img src="<?php echo e(asset($sites['img'])); ?>" alt="{ asset($sites['title']) }}" width="270px">
                        </span>
                        <span class="title">
                            <?php echo e($sites['title']); ?>

                        </span>
                        <div class="details">
                            <span class="description">
                             <?php echo e($sites['description']); ?>

                            </span>
                            <span class="date"><?php echo e($sites['date']); ?></span>
                            <?php if($sites['featured'] == 'true'): ?>
                            <span class="feature"><i class="fa fa-heart" style="font-size:14px;color:#e25342"></i></span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </body>
</html>
<?php /**PATH /Users/seanthomas/code/creativeguild/resources/views/welcome.blade.php ENDPATH**/ ?>