<div id="alert" class="mt-3">
</div>

<form class="p-3" id="Trademarck" name="Trademarck" method="post">
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <input type="hidden" id="prosecution" name="prosecution"  />
    <input type="hidden" id="nametrade" name="nametrade" />
    <input type="hidden" id="idtrade" name="idtrade" />
    <div class="row mb-4 ">
        <h1><i class="bi bi-pc-display"></i> Trademarck</h1>
        <hr>
        <div class="col-sm-5">
            <div class="form-outline">
                <label class="form-label" for="form6Example1">Name</label>
                <input type="text" id="name" name="name" class="form-control" />

            </div>

            <button type="button" onclick="insert()" class="btn btn-primary btn-block mt-3">Save</button>
        </div>
</form>
        <div class=" mt-5" id="trademarcktable">
            <table id="exampletrade" class="table table-striped" style="width:100%">
                <thead>
                    <tr>    
                        <th>Id</th>
                        <th>Name</th> 
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody >

                    
                </tbody>
            </table>

        </div>
        
    </div>
    

    <!-- Text input -->
    <!-- Submit button -->
    


<script src="../Static/js/Works/Trademarck.js"></script>