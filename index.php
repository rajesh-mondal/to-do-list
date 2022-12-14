<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Todo/Tasks</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <style>
        body {
            margin-top: 30px;
        }
        #main{
            padding: 0px 150px 0px 150px;
        }
        #action{
            width: 150px;
        }
    </style>
</head>
<body>
<div class="container" id="main">
    <h2>Tasks Manager</h2>
    <p>This is a sample project for managing our daily tasks. We are going to use HTML, CSS, PHP, MySQL, jQuery for this project</p>
        <h4>All Tasks</h4>
        <form>
            <table>
                <thead>
                <tr>
                    <th></th>
                    <th>Id</th>
                    <th>Task</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input class="label-inline" type="checkbox" value="1"></td>
                    <td>1</td>
                    <td>Bring Medicine for Dad</td>
                    <td>18th May, 2019</td>
                    <td><a href="#">Delete</a> | <a href="#">Edit</a> | <a href="#">Complete</a></td>
                </tr>
                <tr>
                    <td><input class="label-inline" type="checkbox" value="1"></td>
                    <td>2</td>
                    <td>Submit Physics Homework</td>
                    <td>19th May, 2019</td>
                    <td><a href="#">Delete</a> | <a href="#">Edit</a> | <a href="#">Complete</a></td>
                </tr>
                </tbody>
            </table>
            <select id="action">
                <option value="0">With Selected</option>
                <option value="delete">Delete</option>
                <option value="complete">Mark As Complete</option>
            </select>
            <input class="button-primary" id="bulksubmit" type="submit" value="Submit">
        </form>
    <p>...</p>
    <h4>Add Tasks</h4>
    <form>
        <fieldset>
            <label for="task">Task</label>
            <input type="text" placeholder="Task Details" id="task" name="task">
            <label for="date">Date</label>
            <input type="text" placeholder="Task Date" id="date" name="date">
            <input class="button-primary" type="submit" value="Add Task">
        </fieldset>
    </form>
</div>
</body>
</html>