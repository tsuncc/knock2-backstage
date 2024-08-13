<?php 
# $_SERVER['HTTP_REFERER']: 從哪個頁面連過來的
$comeFrom = 'index.php';
if (isset($_SERVER['HTTP_REFERER'])) {
    $comeFrom = $_SERVER['HTTP_REFERER'];
}

?>



<!-- Modal Bootstrap的-->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">新增成功</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-success" role="alert">
                    資料新增成功
                </div>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-primary" onclick="location.href='<?= $comeFrom ?>'">到商品頁</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">繼續新增</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal2 Bootstrap的-->
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel2">資料未新增</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-warning" role="alert">
                    資料未新增
                </div>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-primary" onclick="location.href='<?= $comeFrom ?>'">到商品頁</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">繼續新增</button>
            </div>
        </div>
    </div>
</div>
