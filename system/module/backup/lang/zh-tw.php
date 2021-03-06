<?php if(!defined("RUN_MODE")) die();?>
<?php
$lang->backup->common   = '備份';
$lang->backup->index    = '備份首頁';
$lang->backup->history  = '備份歷史';
$lang->backup->delete   = '刪除備份';
$lang->backup->backup   = '備份';
$lang->backup->restore  = '還原';
$lang->backup->change   = '修改保存時間';
$lang->backup->changeAB = '修改';
$lang->backup->note     = '備註';
$lang->backup->reserve  = '保留備份';
$lang->backup->reserved = '已保留';

$lang->backup->time  = '備份時間';
$lang->backup->files = '備份檔案';
$lang->backup->size  = '大小';

$lang->backup->waitting       = '<span id="backupType"></span>正在進行中，請稍候...';
$lang->backup->confirmDelete  = '是否刪除備份？';
$lang->backup->confirmRestore = '是否還原該備份？';
$lang->backup->holdDays       = '除已保留備份外，其他備份只保存最近 %s 天';

$lang->backup->success = new stdclass();
$lang->backup->success->backup  = '備份成功！';
$lang->backup->success->restore = '還原成功！';

$lang->backup->error = new stdclass();
$lang->backup->error->noWritable     = "<code>%s</code> 不可寫！請檢查該目錄權限，否則無法備份。";
$lang->backup->error->noDelete       = "檔案 %s 無法刪除，修改權限或手工刪除。";
$lang->backup->error->restoreSQL     = "資料庫還原失敗，錯誤：%s";
$lang->backup->error->restoreFile    = "附件還原失敗，錯誤：%s";
$lang->backup->error->backupFile     = "附件備份失敗，錯誤：%s";
$lang->backup->error->backupTemplate = "模板備份失敗，錯誤：%s";

$lang->js->backuping = '備份中...';
$lang->js->restoring = '還原中...';
