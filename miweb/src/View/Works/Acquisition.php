<form class="p-3" id="Acquisition" name="Acquisition" method="post">
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <input type="hidden" id="prosecution" name="prosecution" />
    <input type="hidden" id="nameAcquisition" name="nameAcquisition" />
    <input type="hidden" id="idAcquisition" name="idAcquisition" />
    <div class="row mb-4 ">
        <h1><i class="bi bi-file-earmark-medical me-2"></i> Acquisition</h1>
        <hr>
        <div class="col-sm-5">
            <div class="form-outline">
                <label class="form-label" for="form6Example1">Name</label>
                <input type="text" id="name" name="name" class="form-control" />
            </div>
            <button type="button" onclick="insert()" class="btn btn-primary btn-block mt-3"><i
                    class="bi bi-device-hdd"></i> Save</button>
        </div>
</form>
<div class=" mt-5" id="trademarcktable">
    <table id="exampleAcquisition" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

</div>

</div>


<!-- Text input -->
<!-- Submit button -->



<script src="../Static/js/Works/Acquisition.js"></script>