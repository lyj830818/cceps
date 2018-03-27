<?php if(!class_exists('raintpl')){exit;}?><?php if(!defined("RUN_MODE")){ ?>




<?php echo die(); ?>

<?php } ?>


<?php $themeRoot=$this->var['themeRoot'] = $model->config->webRoot . 'theme/';?>

<?php $content=$this->var['content']  = json_decode($block->content);?>




<?php $method=$this->var['method']   = 'get' . ucfirst(str_replace('article', '', strtolower($block->type)));?>




<?php $articles=$this->var['articles'] = $model->loadModel('article')->$method(empty($content->category) ? 0 : $content->category, $content->limit);?>




<?php if(isset($content->image)){ ?>




<?php $articles=$this->var['articles'] = $model->loadModel('file')->processImages($articles, 'article');?>

<?php } ?>


<style>
#block{$block->id} .card .thumbnail-cell {padding-left: 8px; padding-right: 0}
#block{$block->id} .card .table-cell + .thumbnail-cell {padding-right: 8px; padding-left: 0}
</style>

<div id="block<?php echo $block->id;?>" class='panel panel-block <?php echo $blockClass;?>'>
  <div class='panel-heading'>
    <strong><?php echo $icon . $block->title; ?></strong>
    <?php if(isset($content->moreText) and isset($content->moreUrl)){ ?>




      <div class='pull-right'><?php echo html::a($content->moreUrl, $content->moreText); ?>



</div>
    <?php } ?>

  </div>
  <?php if(isset($content->image)){ ?>




    <?php $imageURL=$this->var['imageURL'] = !empty($content->imageSize) ? $content->imageSize . 'URL' : 'smallURL';?>

    <div class='panel-body no-padding'>
      <div class='cards condensed cards-list'>
      <?php foreach($articles as $article): ?>




        <?php $url=$this->var['url'] = helper::createLink('article', 'view', "id=$article->id", "category={$article->category->alias}&name=$article->alias");?>




        <div class='card'>
          <div class='card-heading'>
            <?php if(isset($content->showCategory) and $content->showCategory == 1){ ?>




              <?php if($content->categoryName == 'abbr'){ ?>




                <?php $categoryName=$this->var['categoryName'] = '[' . ($article->category->abbr ? $article->category->abbr : $article->category->name) . '] ';?>

                <?php echo html::a(helper::createLink('article', 'browse', "categoryID={$article->category->id}", "category={$article->category->alias}"), $categoryName, "class='text-special'"); ?>




              <?php }else{ ?>

                <span class="text-special">{[' . $article->category->name . ']}</span>
              <?php } ?>

<?php } ?>

            <strong><?php echo html::a($url, $article->title, "style='color:{$article->titleColor}'"); ?>



</strong>
            <?php if($article->sticky && (!formatTime($article->stickTime) || $article->stickTime > date('Y-m-d H:i:s'))){ ?>



<span class='text-danger'><i class="icon icon-arrow-up"></i></span> <?php } ?>

          </div>
          <div class='table-layout'>
            <?php if(!empty($article->image)){ ?>




              <?php $thumbnailTitle=$this->var['thumbnailTitle']    = $article->image->primary->title ? $article->image->primary->title : $article->title;?>

              <?php $article->image->primary->objectType = 'article';$this->var['article'] = $article;?>

              <?php $thumbnailLink=$this->var['thumbnailLink']     = html::a($url, html::image($model->loadModel('file')->printFileURL($article->image->primary, $imageURL), "title='{$thumbnailTitle}' class='thumbnail'" ));?>




              <?php $thumbnailMaxWidth=$this->var['thumbnailMaxWidth'] = !empty($content->imageWidth) ? $content->imageWidth . 'px' : '60px';?>

              <?php $thumbnail=$this->var['thumbnail'] = "<div class='table-cell thumbnail-cell' style='max-width: {$thumbnailMaxWidth};'>{$thumbnailLink}</div>";?>

              <?php if($content->imagePosition == 'left'){ ?>



 <?php echo $thumbnail;?>

<?php } ?>

<?php } ?>

            <div class='table-cell'>
              <div class='card-content text-muted small'>
                <strong class='text-important'>
                  <?php if(isset($content->time)){ ?>



 <i class='icon-time'></i> <?php echo formatTime($article->addedDate, DT_DATE4); ?>

<?php } ?>

                </strong>
                &nbsp;<?php echo $article->summary;?>

              </div>
            </div>
            <?php if(!empty($article->image) && isset($thumbnail) && $content->imagePosition == 'right'){ ?>



 <?php echo $thumbnail;?>

<?php } ?>

          </div>
        </div>
      <?php endforeach; ?>

      </div>
    </div>
  <?php }else{ ?>

    <div class='panel-body no-padding'>
      <div class='list-group simple'>
        <?php foreach($articles as $article): ?>




          <?php $alias=$this->var['alias'] = "category={$article->category->alias}&name={$article->alias}";?>

          <?php $url=$this->var['url']   = helper::createLink('article', 'view', "id={$article->id}", $alias);?>




          <?php if(isset($content->time)){ ?>




          <div class='list-group-item'>
            <?php if(isset($content->showCategory) and $content->showCategory == 1){ ?>




              <?php if($content->categoryName == 'abbr'){ ?>




                <?php $categoryName=$this->var['categoryName'] = '[' . ($article->category->abbr ? $article->category->abbr : $article->category->name) . '] ';?>

                <?php echo html::a(helper::createLink('article', 'browse', "categoryID={$article->category->id}", "category={$article->category->alias}"), $categoryName, "class='text-special'"); ?>




              <?php }else{ ?>

                <?php echo html::a(helper::createLink('article', 'browse', "categoryID={$article->category->id}", "category={$article->category->alias}"), '[' . $article->category->name . '] ', "class='text-special'"); ?>

<?php } ?>

<?php } ?>

            <?php $bold=$this->var['bold'] = '';?>

            <?php if($article->sticky && (!formatTime($article->stickTime) || $article->stickTime > date('Y-m-d H:i:s')) and $article->stickBold){ ?>



<?php $bold=$this->var['bold'] = 'font-weight:bold;';?>

<?php } ?>

            <?php echo html::a($url, $article->title, "title='{$article->title}' style='{$bold}color:{$article->titleColor}'"); ?>




            <?php if($article->sticky && (!formatTime($article->stickTime) || $article->stickTime > date('Y-m-d H:i:s'))){ ?>



<span class='text-danger'><i class="icon icon-arrow-up"></i></span> <?php } ?>

            <span class='pull-right text-muted'><?php echo substr($article->addedDate, 0, 10); ?>



</span>
          </div>
          <?php }else{ ?>

          <div class='list-group-item'>
            <?php if(isset($content->showCategory) and $content->showCategory == 1){ ?>




              <?php if($content->categoryName == 'abbr'){ ?>




                <?php $categoryName=$this->var['categoryName'] = '[' . ($article->category->abbr ? $article->category->abbr : $article->category->name) . '] ';?>

                <?php echo html::a(helper::createLink('article', 'browse', "categoryID={$article->category->id}", "category={$article->category->alias}"), $categoryName, "class='text-special'"); ?>




              <?php }else{ ?>

                <?php echo html::a(helper::createLink('article', 'browse', "categoryID={$article->category->id}", "category={$article->category->alias}"), '[' . $article->category->name . '] ', "class='text-special'"); ?>

<?php } ?>

<?php } ?>

            <?php $bold=$this->var['bold'] = '';?>

            <?php if($article->sticky && (!formatTime($article->stickTime) || $article->stickTime > date('Y-m-d H:i:s')) and $article->stickBold){ ?>



<?php $bold=$this->var['bold'] = 'font-weight:bold;';?>

<?php } ?>

            <?php echo html::a($url, $article->title, "title='{$article->title}' style='{$bold}color:{$article->titleColor}'"); ?>




            <?php if($article->sticky && (!formatTime($article->stickTime) || $article->stickTime > date('Y-m-d H:i:s'))){ ?>



<span class='text-danger'><i class="icon icon-arrow-up"></i></span><?php } ?>

          </div>
          <?php } ?>

        <?php endforeach; ?>

      </div>
    </div>
  <?php } ?>

</div>
