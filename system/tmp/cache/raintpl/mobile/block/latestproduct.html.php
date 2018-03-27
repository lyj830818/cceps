<?php if(!class_exists('raintpl')){exit;}?><?php if(!defined("RUN_MODE")){ ?>


<?php echo die(); ?>

<?php } ?>


<?php $content=$this->var['content']  = json_decode($block->content);?>


<?php $type=$this->var['type']     = str_replace('product', '', strtolower($block->type));?>


<?php $method=$this->var['method']   = 'get' . $type;?>

<?php if(empty($content->category)){ ?>


<?php $content->category = 0;$this->var['content'] = $content;?>

<?php } ?>

<?php $showImage=$this->var['showImage'] = isset($content->image) ? true : false;?>

<?php $products=$this->var['products'] = $model->loadModel('product')->$method($content->category, $content->limit, $showImage);?>


<div id="block<?php echo $block->id;?>" class="<?php echo $showImage ? 'panel-cards with-cards ' : ''; ?> panel panel-block <?php echo $blockClass;?>">
  <div class='panel-heading'>
    <strong><?php echo $icon;?> <?php echo $block->title;?></strong>
    <?php if(isset($content->moreText) and isset($content->moreUrl)){ ?>


      <div class='pull-right'><?php echo html::a($content->moreUrl, $content->moreText); ?>

</div>
    <?php } ?>

  </div>
  <?php if($showImage){ ?>


    <div class='panel-body no-padding'>
      <?php $count=$this->var['count'] = count($products);?>


      <?php if($count == 0){ ?>


<?php $count=$this->var['count'] = 1;?>

<?php } ?>

      <?php $recPerRow=$this->var['recPerRow'] = min($count, max(1, zget($content, 'recPerRow', 1)));?>


      <div class='cards cards-products' data-cols='<?php echo $recPerRow;?>'>
        <style>.col-custom-<?php echo $recPerRow;?> { width: " . (100/<?php echo $recPerRow;?>) %}</style>
        <?php $index=$this->var['index'] = 0;?>

        <?php foreach($products as $product): ?>


          <?php $rowIndex=$this->var['rowIndex'] = $index % $recPerRow;?>

          <?php if($rowIndex === 0){ ?>

 <div class='row'> <?php } ?>

          <div class='col col-custom-<?php echo $recPerRow;?>' data-rowIndex='<?php echo $rowIndex;?>' data-index='<?php echo $index;?>'>
          <?php $url=$this->var['url'] = helper::createLink('product', 'view', "id=$product->id", "category={$product->category->alias}&name=$product->alias");?>


            <div class='card'>
              <a class='card-img' href='<?php echo $url;?>'>
                <?php if(empty($product->image)){ ?>


                  <?php $imgColor=$this->var['imgColor'] = $product->id * 57 % 360;?>

                  <div class='media-placeholder' style='background-color: hsl(<?php echo $imgColor;?>, 60%, 80%); color: hsl(<?php echo $imgColor;?>, 80%, 30%);' data-id='<?php echo $product->id;?>'><?php echo $product->name;?></div>
                <?php }else{ ?>

                  <?php $product->image->primary->objectType =  'product';$this->var['product'] = $product;?>

                  <?php $imageSrc=$this->var['imageSrc'] = $model->loadModel('file')->printFileURL($product->image->primary, 'middleURL');?>


                  <img class='lazy' alt='<?php echo $product->name;?>' title='<?php echo $product->name;?>' data-src='<?php echo $imageSrc;?>'>
                <?php } ?>

              </a>
              <div class='card-content'>
                <?php if(isset($content->showCategory) and $content->showCategory == 1){ ?>


                    <?php if($content->categoryName == 'abbr'){ ?>


                        <?php $categoryName=$this->var['categoryName'] = '[' . ($product->category->abbr ? $product->category->abbr : $product->category->name) . '] ';?>

                        <?php echo html::a(helper::createLink('product', 'browse', "categoryID={$product->category->id}", "category={$product->category->alias}"), $categoryName, "class='text-special'"); ?>


                    <?php }else{ ?>

                        <?php echo html::a(helper::createLink('product', 'browse', "categoryID={$product->category->id}", "category={$product->category->alias}"), '[' . $product->category->name . '] ', "class='text-special'"); ?>

<?php } ?>

                <?php } ?>

                <?php if(isset($content->alignTitle) and $content->alignTitle == 'middle'){ ?>


                  <div style='text-align:center;'><a href='<?php echo $url;?>'><?php echo $product->name;?></a></div>
                <?php }else{ ?>

                  <div><a href='<?php echo $url;?>'><?php echo $product->name;?></a></div>
                <?php } ?>

                <div>
                <?php if(!$product->unsaleable){ ?>


                  <?php if($product->negotiate){ ?>


                    <strong class='text-danger'><?php echo $model->lang->product->negotiate;?></strong>
                  <?php }else{ ?>

                    <?php if($product->promotion != 0){ ?>


                      <strong class='text-danger'><?php echo $config->product->currencySymbol;?> <?php echo $product->promotion;?></strong>
                      <?php if($product->price != 0){ ?>


                        &nbsp;&nbsp;<small class='text-muted text-line-through'><?php echo $config->product->currencySymbol;?> <?php echo $product->price;?></small>
                      <?php } ?>

                    <?php }elseif($product->price != 0){ ?>


                      <strong class='text-danger'><?php echo $config->product->currencySymbol;?> <?php echo $product->price;?></strong>
                    <?php } ?>

<?php } ?>

                <?php } ?>

                <?php if(isset($content->showViews) and $content->showViews){ ?>


                  <span><i class='icon icon-eye-open'></i><?php echo $product->views;?></span>
                <?php } ?>

                </div>
              </div>
            </div>
          </div>
          <?php if($recPerRow === 1 || $rowIndex === ($recPerRow - 1) || $count === ($index + 1)){ ?>


            </div>
          <?php } ?>

          <?php $index++; ?>

        <?php endforeach; ?>

      </div>
    </div>
  <?php }else{ ?>

  <div class='panel-body no-padding'>
    <div class='list-group simple'>
      <?php foreach($products as $product): ?>


        <?php $url=$this->var['url'] = helper::createLink('product', 'view', "id=$product->id", "category={$product->category->alias}&name=$product->alias");?>


        <div class='list-group-item'>
          <span class='text-latin pull-right'>
          <?php if(!$product->unsaleable){ ?>


            <?php if($product->negotiate){ ?>


              <strong class='text-danger'>{ $model->lang->product->negotiate}</strong>
            <?php }else{ ?>

              <?php if($product->promotion != 0){ ?>


                <?php if($product->price != 0){ ?>


                   <small class='text-muted text-line-through'><?php echo $config->product->currencySymbol;?> <?php echo $product->price;?></small>&nbsp;&nbsp;
                <?php } ?>

                <strong class='text-danger'><?php echo $config->product->currencySymbol;?><?php echo $product->promotion;?></strong>
              {elseif($product->price != 0)
                 <strong class='text-danger'><?php echo $config->product->currencySymbol;?> <?php echo $product->price;?></strong>
              <?php } ?>

<?php } ?>

          <?php } ?>

          </span>
          <?php if(isset($content->showCategory) and $content->showCategory == 1){ ?>


            <?php if($content->categoryName == 'abbr'){ ?>


              <?php $categoryName=$this->var['categoryName'] = '[' . ($product->category->abbr ? $product->category->abbr : $product->category->name) . '] ';?>

              <?php echo html::a(helper::createLink('product', 'browse', "categoryID={$product->category->id}", "category={$product->category->alias}"), $categoryName, "class='text-special'"); ?>


            <?php }else{ ?>

              <?php echo html::a(helper::createLink('product', 'browse', "categoryID={$product->category->id}", "category={$product->category->alias}"), '[' . $product->category->name . '] ', "class='text-special'"); ?>

<?php } ?>

          <?php } ?>

          <?php echo html::a($url, $product->name); ?>


        </div>
      <?php endforeach; ?>

    </div>
  </div>
  <?php } ?>

</div>
