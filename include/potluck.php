<div>
    <a class="btn bottomNav btn-primary" href="#" role="button" data-bs-toggle="modal" data-bs-target="#signForm">Sign-up</a>
</div>

<div id ="signForm" class="modal fade">
    <div class="modal-dialog" role   ="document"> 
        <div class="modal-content"> 
            <div class="modal-header">
                <h1 class="modal-title">Potluck Sign-up</h1> 
            </div> 
                <div class="modal-body"> 
                <form method = "POST" action = "include/items.php" id="form" class="formVal autocomplete">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Jane Doe">
                </div>
                <div class="form-group">
                    <label for="item">Dish or item you're bringing</label>
                    <input type="text" class="form-control" id="item" name="item" placeholder="Tacos">
                </div>
                <div class="form-group">
                    <label for="guests" style="color: silver;">Number of guests joining you</label>
                    <input type="number" class="form-control" id="guests" name="guests" placeholder="0">
                    <div class="my-4"> 
                        <button type="submit" data-target="#form" class="button">Submit</button> 
                    </div>
                </div>
                </form> 
            </div> 
        </div> 
    </div> 
</div>