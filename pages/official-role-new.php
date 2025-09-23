<div class="container-fluid">
    <div class="row">
        <div class="main-header">
            <h4>Official Role</h4>
        </div>
    </div>

    <!-- 2-1 block start -->
    <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-block">
                <form action="/slmd/services/function.php" method="POST">
                    <div class="form-group row">
                        <div class="col-md-2"><label for="Name" class="form-control-label">Name <span class="required">*</span> </label></div>
                        <div class="col-md-4"><input type="text" class="form-control" name="Name" id="Name" placeholder="Name" Required></div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-2"><label for="Notes" class="form-control-label">Notes</label></div>
                        <div class="col-md-4"><textarea class="form-control" name="Notes" id="Notes" placeholder="Notes" rows="4"></textarea></div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" class="form-control" name="btn_action" id="btn_action" value="official-role-new">
                        </div>
                        <div class="col-md-1">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                        </div>
                        <div class="col-md-1">
                            <a href="/slmd/pages?page=official-role-list" class="btn btn-secondary waves-effect waves-light">Back</a> 
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    <!-- 2-1 block end -->
</div>