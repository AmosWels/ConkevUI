<div id="add_Conkevlist" class="modal modal-fixed-footer" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 440.87px; width: 500px;">
    <!--<form action="" method="">-->
    <div class="modal-content">
        <h5>Sanction List Upload</h5><br>
        <select class="browser-default">
            <option value="" disabled selected>Select Conkevlist To Upload</option>
            <option value="1">PEP</option>
            <option value="2" disabled="disabled">Sanctions</option>
            <option value="3">Adverse Media</option>
            <option value="3">Financial Crime</option>
        </select><br>
        <span>Browse Below</span><br>
        <div class="card" style="margin-left: 10px; margin-right: 10px">
            <div class="card-content">
                <div class="row s12" >
                    <form action="/file-upload" class="dropzone">
                        <div class="fallback">
                            <input name="file" type="file" multiple />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="modal-close btn waves-effect waves-blue blue">Save</button>
        <a href="#" class="modal-action modal-close waves-effect waves-blue btn-flat ">Cancel</a>   
    </div>
    <!--</form>-->
</div>