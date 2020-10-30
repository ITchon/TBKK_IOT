<style>
.modal-body {
    max-height: calc(100vh - 210px);
    overflow-y: auto;
}
</style>
<div class="modal fade" id="smart_fac" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="bg-primary modal-header text-center">
      <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true">×</span>
              <span class="sr-only">Close</span>
            </button>
        <h1><div id="text_header"></div></h1>
      </div>
        <div class="modal-body text-center">
            <div id="data_body"></div>
        </div>
      </div>
      <div class="modal-footer ">
      <button type="button" class="btn btn-default" data-dismiss="modal">CLOSE</button>

      </div>
    </div>
  </div>
</div>