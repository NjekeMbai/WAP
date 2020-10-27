<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Food Guru : Orders</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="styleregister.css">
    </head>
    <body style="background-color: wheat">
        <h1><i><strong>Food Guru Grocery</strong></i></h1>
        
        
        <form action ="" method="post">
            <br><br>
            <label><strong>To make an order, please select the desired item(s)</strong></label>
            
            <fieldset>
            <p><strong>NOTE</strong></p>
            <p>Weight is in Kilograms </p>
            </fieldset>
        
            <br><br>
            <fieldset>
                <legend><strong>Vegetables</strong></legend>
                
                
                <fieldset>
                    <input type="checkbox" name="onions" id="onions">
                    <label for="onions">Onions</label>
                    <input type="number" id="onion_weight" name="onion_weight" min='1' max='50'>
                    <label for="onion_weight"> (kgs)</label>
                    
                    <br><br>
                    
                    <input type="checkbox" name="tomatoes" id="tomatoes">
                    <label for="tomatoes">Tomatoes</label>
                    <input type="number" id="tomato_weight" name="tomato_weight" min='1' max='50'>
                    <label for="tomato_weight"> (kgs)</label>
                    
                    <br><br>
                    
                    <input type="checkbox" name="carrots" id="carrots">
                    <label for="carrots">Carrots</label>
                    <input type="number" id="carrot_weight" name="carrot_weight" min='1' max='50'>
                    <label for="carrot_weight"> (kgs)</label>
                    
                    <br><br>
                    
                    <input type="checkbox" name="potatoes" id="potatoes">
                    <label for="potatoes">Potatoes</label>
                    <input type="number" id="potato_weight" name="potato_weight" min='1' max='50'>
                    <label for="potato_weight"> (kgs)</label>
                    
                    <br><br>
                    
                    <input type="checkbox" name="sukuma" id="sukuma">
                    <label for="sukuma">Sukuma Wiki (kales)</label>
                    <input type="number" id="sukuma_weight" name="sukuma_weight" min='1' max='50'>
                    <label for="sukuma_weight"> (kgs)</label>
                    
                    <br><br>
                                                                             
                    <label>Bell Peppers: </label>
                    <input type="checkbox" name="red_peppers" id="red_peppers">
                    <label for="red_peppers">Red Bell Peppers</label>
                    <input type="number" id="red_weight" name="red_weight" min='1' max='50'>
                    <label for="red_weight"> (kgs)</label>
                    
                    
                    
                    <input type="checkbox" name="yellow_peppers" id="yellow_peppers">
                    <label for="yellow_peppers">Yellow Bell Peppers</label>
                    <input type="number" id="yellow_weight" name="yellow_weight" min='1' max='50'>
                    <label for="yellow_weight"> (kgs)</label>
                    
                    <br><br>
                    
                    <input type="checkbox" name="celery" id="celery">
                    <label for="celery">Celery</label>
                    <input type="number" id="celery_weight" name="celery_weight" min='1' max='50'>
                    <label for="celery_weight"> (kgs)</label>
                    
                    <br><br>
                    
                </fieldset>
                
            </fieldset>
            <br><br>
            <fieldset>
                <legend><strong>Fruits</strong></legend>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRVMWU9Aefbt76AGd3IhUum_bPcNavsUBBhwLezbj1XW1XSf2nV&usqp=CAU">
                <fieldset>
                    <input type="checkbox" name="mango" id="mango" >
                    <label for="mango">Mangoes: </label>
                    <input type="number" id="mango_weight" name="mango_weight" min='1' max='50'>
                    <label for="mango_weight"> (kgs)</label>
                    
                    <br><br>
                    
                    <input type="checkbox" name="banana" id="banana">
                    <label for="banana">Bananas: </label>
                    <input type="number" id="banana_weight" name="banana_weight" min='1' max='50'>
                    <label for="banana_weight"> (kgs)</label>
                    <br><br>
                    
                    <input type="checkbox" name="orange" id="orange">
                    <label for="orange">Oranges: </label>
                    <input type="number" id="orange_weight" name="orange_weight" min='1' max='50'>
                    <label for="orange_weight"> (kgs)</label>
                    <br><br>
                                        
                    <input type="checkbox" name="grapes" id="grapes">
                    <label for="grapes">Grapes: </label>
                    <input type="number" id="grapes_weight" name="grapes_weight" min='1' max='50'>
                    <label for="grapes_weight"> (kgs)</label>
                    <br><br>
                    
                    <input type="checkbox" name="watermelon" id="watermelon">
                    <label for="watermelon">Watermelon: </label>
                    <input type="number" id="watermelon_weight" name="watermelon_weight" min='1' max='50'>
                    <label for="watermelon_weight"> (kgs)</label>
                    <br><br>
                    
                </fieldset>
                
            </fieldset>
            <br><br>
            <fieldset>
                <legend><strong>Meat</strong></legend>
                
                <fieldset>
                    <input type="checkbox" name="chicekn" id="chicken">
                    <label for="chicken">Chicken</label>
                    
                    <select>
                        <option>Full</option>
                        
                        <optgroup label="Pieces">
                            <option>Breast</option>
                            <option>Wings</option>
                            <option>Drumsticks</option>
                        </optgroup>
                    </select>
                    
                    
                    <label for="chicken_weight">Quantity</label>
                    <input type="number" name="chicken_weight" id="chicken_weight">
                    <br><br>
                    
                    
                    <label>Beef</label>
                    <input type='checkbox' id='on_bone' name='on_bone'>
                    <label for='on_bone'>On Bone: </label>
                    <input type='checkbox' id='steak' name='steak'>
                    <label for='steak'>Steak: </label>
                    <input type='checkbox' id='mince' name='mince'>
                    <label for='mince'>Mince: </label>
                    <input type="number" id="beef_weight" name="beef_weight" min='1' max='50'>
                    <label for="beef_weight"> (kgs)</label>
                    <br><br>
                    
                    <label>Mutton</label>          
                    <input type='checkbox' id='on_bone2' name='on_bone'>
                    <label for='on_bone2'>On Bone: </label>
                    <input type='checkbox' id='steak2' name='steak'>
                    <label for='steak'>Steak: </label>
                    <input type='checkbox' id='mince2' name='mince'>
                    <label for='mince2'>Mince: </label>
                    <input type="number" id="mutton_weight" name="mutton_weight" min='1' max='50'>
                    <label for="mutton_weight"> (kgs)</label>
                    <br><br>                  
                                        
                </fieldset>
            </fieldset>
            <br><br>
            <fieldset>
                <legend><strong>Herbs and Spices</strong></legend>
                
                
                <fieldset>
                    <legend><strong>Note: 1 bunch/piece = 0.5 kgs</strong></legend>
                    <input type="checkbox" name="leeks" id="leeks">
                    <label for="leeks">Leeks</label>
                    <input type="number" id="leeks_weight" name="leeks_weight">
                    <label for="leeks_weight"> (pcs)</label>
                    <br><br>
                    
                    <input type="checkbox" name="rosemary" id="rosemary">
                    <label for="rosemary">Rosemary</label>
                    <input type="number" id="rosemary_weight" name="rosemary_weight">
                    <label for="rosemary_weight"> (pcs)</label>
                    <br><br>
                    
                    <input type="checkbox" name="cumin" id="cumin">
                    <label for="cumin">Cumin</label>
                    <input type="number" id="cumin_weight" name="cumin_weight">
                    <label for="cumin_weight"> (pcs)</label>
                    <br><br>
                    
                    <input type="checkbox" name="mutton" id="mint">
                    <label for="mint">Mint</label>
                    <input type="number" id="mint_weight" name="mint_weight">
                    <label for="mint_weight"> (pcs))</label>
                    <br><br>
                    
                    <input type="checkbox" name="bay_leaves" id="bay_leaves">
                    <label for="bay_leaves">Bay Leaves</label>
                    <input type="number" id="mutton_weight" name="bay_leaves_weight">
                    <label for="bay_leaves_weight"> (pcs)</label>
                    <br><br>                    
                    
                </fieldset>
                <br>
                <fieldset>
                    <legend><strong>Customer details</strong></legend>
                    
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name">
                    <br><br>
                    <label for="email_add">Email: </label>
                    <input type="email" name="email_address" id="email_add">
                    <br><br>
                    <label for="phone">Phone Number: </label>
                    <input type="number" name="phone_number" id="phone">
                    <br><br>
                    <label for="location">Location</label>
                    <textarea id="location" name="location"></textarea>
                    <br><br>
                    <label for="notes">Extra notes</label>
                    <textarea></textarea>
                </fieldset>
                <br><br><br>
                                
                    <button style='background-color:wheat' type="submit" value="Order">Order</button>
                    <button style='background-color: wheat' type="reset">Reset</button>
                
            </fieldset>
            <br><br>
                    
            
        </form>
        
        
    </body>
</html>
