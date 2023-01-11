<link href="<?php echo e(asset('css/home.css')); ?>" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<h1 class="display-4">To-Do List</h1>
<div class="tablet">
    <div id="newtask">
        <form method="POST" action="/create">
            <?php echo csrf_field(); ?>
            <label for="title">
                <input type="text" placeholder="Add Tasks" name="title" required>
            </label>
            <button id="push" type="submit">Add</button>
        </form>
    </div>
    <div id="tasks">
        <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class=<?php echo e($task->completed ? 'task-active' : 'task'); ?>>
                <div class="row justify-content-between">
                    <div class="col-4"><span id="taskname"><?php echo e($task->title); ?>

                    </span></div>
                    <div class="col-3">
                        <form method="POST" action="/completed/<?php echo e($task->id); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field("PUT"); ?>
                            <button type="submit" class="btn btn-primary" id="toggle-button">
                                <img src="<?php echo e(asset('images/checkmark.png')); ?>" alt="Button" width="20">
                            </button>
                        </form>
                        <form method="POST" action="/delete/<?php echo e($task->id); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field("DELETE"); ?>
                            <button type="submit" class="btn btn-danger">
                                <img src="<?php echo e(asset('images/delete_icon.png')); ?>" alt="Button" width="20">
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
        crossorigin="anonymous"></script>
<?php /**PATH C:\Users\CodeLab01\Documents\Workspace\To-Do-List\resources\views/home.blade.php ENDPATH**/ ?>