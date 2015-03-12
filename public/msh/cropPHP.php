<div class="tab-pane" id="tab_8">
    <div class="row">
        <div class="col-md-7 responsive-1024">
            <!-- This is the image we're attaching Jcrop to -->
            <img src="/assets/global/plugins/jcrop/demos/demo_files/image5.jpg" id="demo8" alt="Jcrop Example"/>
        </div>
        <div class="col-md-5 responsive-1024">
            <h4>An example server-side crop script.</h4>
            <p>
                Hidden form values are set when a selection is made. If you press the <i>Crop Image</i>
                button, the form will be submitted and a 150x150 thumbnail will be dumped to the browser. Try it!
            </p>
            <!-- This is the form that our event handler fills -->
            <form action="/assets/global/plugins/jcrop/crop-demo.php" target="_blank" method="post" id="demo8_form">
                <input type="hidden" id="crop_x" name="x"/>
                <input type="hidden" id="crop_y" name="y"/>
                <input type="hidden" id="crop_w" name="w"/>
                <input type="hidden" id="crop_h" name="h"/>
                <input type="submit" value="Crop Image" class="btn btn-large green"/>
            </form>
        </div>
    </div>
</div>