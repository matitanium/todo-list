
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link rel="stylesheet" href="<?= BASE_URL?>assets/style.css">
    <title><?= TITLE_PRO ?></title>
</head>
<body>

<?php
foreach($rec as $value)
{

}

?>

<!-- </div>
                    <div id="add-task" class="add-task">
                        <div>
                            <form action="proccess/add-task.php" method="POST">
                                <input name="taskname" class="newTask" id="newTask" type="text" placeholder="Task Name To Add..." required>
                                <br>
                                <input name="taskcreat" class="task-crator" id="task-crator" type="text" placeholder="Enter Your Name: " required>
                                <br>
                                <button onclick="" class="confirm" id="confirm" type="submit"> Add </button>
                            </form>
                        </div> 
                    </div> -->

               
    <div class="row d-flex justify-content-center container">
        
    
        <div class="col-md-8">
            <div class="card-hover-shadow-2x mb-3 card">
                <div class="card-header-tab card-header">
                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="fa fa-tasks"></i>&nbsp;Task Lists</div>
                </div>
                <div class="scroll-area-sm">
                <?php foreach($rec as $value):    ?>       
                    <perfect-scrollbar class="ps-show-limits">
                        <div style="position: static;" class="ps ps--active-y">
                            <div class="ps-content">
                                <ul class=" list-group list-group-flush">
                                <?php if($value[5]==1):?>
                                    <li class="list-group-item">
                                        <div class="todo-indicator bg-warning"></div>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-2">
                                                    <div class="custom-checkbox custom-control"> <input class="custom-control-input" id="exampleCustomCheckbox12" type="checkbox"><label class="custom-control-label" for="exampleCustomCheckbox12">&nbsp;</label> </div>
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading"><?= $value[1] ?><div class="badge badge-danger ml-2">Rejected</div>
                                                    </div>
                                                    <div class="widget-subheading"><i><?= $value[2] ?></i></div>
                                                </div>
                                                <div class="widget-content-right"> <button class="border-0 btn-transition btn btn-outline-success"> <i class="fa fa-check"></i></button> <button class="border-0 btn-transition btn btn-outline-danger"> <i class="fa fa-trash"></i> </button> </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php endif ?>
                                    <?php if($value[5]==0): ?>
                                    <li class="list-group-item">
                                        <div class="todo-indicator bg-info"></div>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-2">
                                                    <div class="custom-checkbox custom-control"><input class="custom-control-input" id="exampleCustomCheckbox2" type="checkbox"><label class="custom-control-label" for="exampleCustomCheckbox2">&nbsp;</label></div>
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading"><?= $value[1] ?></div>
                                                    <div class="widget-subheading"><?= $value[2] ?></div>
                                                </div>
                                                <div class="widget-content-right"> <a href="index.php?id=<?=$value[0]?>"><button  class="border-0 btn-transition btn btn-outline-success"><i class="fa fa-check"></i></button></a>  <button class="border-0 btn-transition btn btn-outline-danger"> <i class="fa fa-trash"></i> </button> </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php endif ?>
                                </ul>
                            </div>
                        </div>
                    </perfect-scrollbar>
                    <?php endforeach ?>
                </div>
                    <div id="add-task" class="add-task">
                        <div>
                            <form action="index.php" method="POST">
                                <input name="taskname" class="newTask" id="newTask" type="text" placeholder="Task Name To Add..." required>
                                <br>
                                <input name="taskcreat" class="task-crator" id="task-crator" type="text" placeholder="Enter Your Name: " required>
                                <br>
                                <button onclick="" name="i" class="confirm" id="confirm" type="submit"> Add </button>
                            </form>
                        </div> 
                    </div>
                <div class="d-block text-right card-footer"><button onclick=CancelTask() class="mr-2 btn btn-link btn-sm">Cancel</button>
                <button onclick=addtask() class="btn btn-primary">Add Task</button></div>
            </div>
        </div>
    </div>
    <script src="assets/cn.js"></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
    
</body>
</html>
