<div class="tab-pane" id="tab_2">
    <div class="row">
        <div class="col-md-7 col-sm-12 responsive-1024">
            <h4>An example with a basic event handler.</h4>
            <p>
                Here we've tied several form values together with a simple event handler invocation. The result is that the form values are updated in real-time as the selection is changed using Jcrop's <em>onChange</em> handler.
            </p>
            <img src="/assets/global/plugins/jcrop/demos/demo_files/image2.jpg" id="demo2" alt="Jcrop Example" class="img-responsive"/>
        </div>
        <div class="col-md-5 col-sm-12 responsive-1024">
            <h4>Cropped Image Details:</h4>
            <form id="coords" class="coords form-inline" onsubmit="return false;" action="javascript:;">
                <table class="table table-bordered">
                    <tr>
                        <td>
                            <label class="control-label">X1</label>
                        </td>
                        <td>
                            <input type="text" id="x1" name="x1" class="form-control btn-sm"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="control-label">Y1</label>
                        </td>
                        <td>
                            <input type="text" id="y1" name="y1" class="form-control btn-sm"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="control-label">X2</label>
                        </td>
                        <td>
                            <input type="text" id="x2" name="x2" class="form-control btn-sm"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="control-label">Y2</label>
                        </td>
                        <td>
                            <input type="text" id="y2" name="y2" class="form-control btn-sm"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="control-label">Width</label>
                        </td>
                        <td>
                            <input type="text" id="w" name="w" class="form-control btn-sm"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="control-label">Height</label>
                        </td>
                        <td>
                            <input type="text" id="h" name="h" class="form-control btn-sm"/>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>