<div class="tab-pane" id="tab_3">
    <h4>An example implementing a preview pane.</h4>
    <p>
        Obviously the most visual demo, the preview pane is accomplished entirely outside of Jcrop with a simple jQuery-flavored callback. This type of interface could be useful for creating a thumbnail or avatar. The onChange event handler is used to update the view in the preview pane.
    </p>
    <div class="row">
        <div class="col-md-6 responsive-1024">
            <img src="/assets/global/plugins/jcrop/demos/demo_files/image3.jpg" id="demo3" alt="Jcrop Example"/>
        </div>
        <div class="col-md-6 responsive-1024">
            <div id="preview-pane">
                <div class="preview-container">
                    <img src="/assets/global/plugins/jcrop/demos/demo_files/image3.jpg" class="jcrop-preview" alt="Preview"/>
                </div>
            </div>
        </div>
    </div>
</div>