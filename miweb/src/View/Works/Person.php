<form class="p-3" id="Person" name="Person" method="post">
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <input type="hidden" id="prosecution" name="prosecution" />
    <input type="hidden" id="statusPerson" name="statusPerson" />
    <input type="hidden" id="nptxt" name="nptxt" />
    <input type="hidden" id="nltxt" name="nltxt" />
    <input type="hidden" id="citxt" name="citxt" />
    <input type="hidden" id="dbtxt" name="dbtxt" />
    <input type="hidden" id="dptxt" name="dptxt" />
    <input type="hidden" id="idPerson" name="idPerson" />
    <div class="row mb-4 ">
        <h1><i class="bi bi-person-lines-fill"></i> People</h1>
        <hr>
        <div class="col-sm-5">
            <div class="row">
                <div class="form-outline col">
                    <label class="form-label " for="form6Example1">Name</label>
                    <input type="text" id="namePerson" name="namePerson" class="form-control" />
                </div>
                <div class="form-outline col">
                    <label class="form-label" for="form6Example1">Last name</label>
                    <input type="text" id="lastnamePerson" name="lastnamePerson" class="form-control" />
                </div>
            </div>

            <div class="row">
                <div class="form-outline">
                    <label class="form-label" for="form6Example1">ID</label>
                    <input type="text" id="idcodePerson" name="idcodePerson" class="form-control" />
                </div>
                <div class="form-outline col">
                    <label class="form-label" for="form6Example1">Date born</label>
                    <input type="text" id="datebornPerson" name="datebornPerson" class="form-control" />
                </div>
                <div class="form-outline col">
                    <label class="form-label" for="form6Example1">Departamen</label>
                    <div class="input-group">
                        <input type="text" id="nameD" name="nameD" class="form-select" disabled />
                        <button type="button" class="btn btn-primary " onclick="loadingdepartamen()"
                                data-bs-toggle="modal" data-bs-target="#staticBackdrop"> Show
                        </button>
                    </div>
                    <input type="hidden" id="departamentI" name="departamentI" />
                </div>
            </div>

            <button type="button" onclick="insert()" class="btn btn-primary btn-block mt-3"><i
                    class="bi bi-device-hdd"></i> Save</button>
        </div>
</form>
<div class=" mt-2" id="trademarcktable">
    <table id="examplePerson" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Last name</th>
                <th>Id</th>
                <th>Date born</th>
                <th>Departament</th>
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
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" 
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Show departaments</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="trademarcktable">
                  <table id="exampleDepartament" class="table table-striped" style="width:100%">
                      <thead>
                          <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th>Add</th>
                          </tr>
                      </thead>
                      <tbody>
                      </tbody>
                  </table>
            </div>

        </div>
    </div>
</div>

<script src="../Static/js/Works/Person.js"></script>