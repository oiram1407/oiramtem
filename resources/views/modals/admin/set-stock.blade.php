<!-- Modal -->
<div class="modal fade" id="dialog_set_stock" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Strock de {{ $p->product_name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form class="modal-body" method="POST" id="set_stock_form">
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</div>
