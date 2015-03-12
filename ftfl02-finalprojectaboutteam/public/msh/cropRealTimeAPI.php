<div class="tab-pane" id="tab_5">
    <div class="row">
        <div class="col-md-7 responsive-1024">
            <img src="/assets/global/plugins/jcrop/demos/demo_files/image5.jpg" id="demo5" alt="Jcrop Example"/>
        </div>
        <div class="col-md-5 util-btn-margin-bottom-5 responsive-1024">
            <h3>Realtime API</h3>
										<span class="requiresjcrop">
										<button id="setSelect" class="btn default">setSelect</button>
										<button id="animateTo" class="btn default">animateTo</button>
										<button id="release" class="btn default">Release</button>
										<button id="disable" class="btn default">Disable</button>
										</span>
            <button id="enable" class="btn default" style="display:none;">Re-Enable</button>
            <button id="unhook" class="btn default">Destroy!</button>
            <button id="rehook" class="btn default" style="display:none;">Attach Jcrop</button>
            <fieldset class="optdual requiresjcrop">
                <h4>Option Toggles</h4>
                <div class="checkbox-list">
                    <label><input type="checkbox" id="ar_lock"/>Aspect ratio</label>
                    <label><input type="checkbox" id="size_lock"/>minSize/maxSize setting</label>
                    <label><input type="checkbox" id="can_click"/>Allow new selections</label>
                    <label><input type="checkbox" id="can_move"/>Selection can be moved</label>
                    <label><input type="checkbox" id="can_size"/>Resizable selection</label>
                </div>
            </fieldset>
            <fieldset class="requiresjcrop">
                <h4>Change Image</h4>
                <div class="btn-group">
                    <button class="btn default" id="img2">Pool</button>
                    <button class="btn default active" id="img1">Sago</button>
                    <button class="btn default" id="img3">Sago w/ outerImage</button>
                </div>
            </fieldset>
        </div>
    </div>
</div>