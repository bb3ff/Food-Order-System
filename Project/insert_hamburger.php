<?php include 'insert_menu.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='insert_hamburger.css'>
    <title>Document</title>
</head>
<body>
    


    
    <div class="h-wrapper">
        <div class="form-box login">
            <span class="icon-close"><ion-icon name="close"></ion-icon></span>
            <h2> 點餐 </h2>
            <form action="insert_hamburger.php" method="post">
                <div class="input-box">
                                
                    <input type="text" name="username" required >
                    <label for="username">Name</label>
                </div>
                <div class="input-box">
                                
                    <input type="text" name='phonenumber' required>
                    <label for="phonenumber">Phone Number</label>
                </div>
                <div class="input-box">
                    <input type='text' name='address' required>
                    <label for="address">Address</label>
                                
                </div>

                <div class="input-box">
                    
                    <select id='food' class='select' name='food'>
                            <option value='Hamburger'>Hamburger</option>
    
                    </select> 
                    <label for="food">Food</label>
                </div>
                
                 
                <div class="input-box">
                    
                    <input type="number" name="unit_number" required >
                    <label for="unit_number">訂單數量</label>
                </div>
                <div class="input-box">
                
                <select id='spicy' class='select' name='category'>
                        <option value='little'>Little</option>
                        <option value='Medium'>Medium</option> 
                        <option value='Very'>Very</option> 
                </select> 
                <label for="category">Choose spicy:</label>
                </div>
                

                
                
                <button type="submit" class="submit_btn">Add to the Cart</button>      
            </form>
        </div>
        

    </div>

            
</body>
</html>