<?php
    $post_type  = "postname";  // 投稿タイプ名を記入
    $actionLink = H_URL.$post_type.'/'; // form action のリンク
    $postTaxName01 = 'cate01'; // タクソノミー名その１を記入
    $postTaxName02 = 'cate02'; // タクソノミー名その２を記入
    $postTaxName03 = 'cate03'; // タクソノミー名その３を記入
    // $postTaxName04 = 'cate04';  // タクソノミー名その４を記入
?>
<div class="new-serch">
<form action="<?php echo $actionLink; ?>" role="search" method="get">
    <p>投稿【カスタム】の絞り込み検索</p>


    <!-- ★★★　カテゴリー01　start　★★★ -->
    <div class="category-list">
        <h3>【 カテゴリ01 】</h3>
    <?php
        $tax_name = $postTaxName01;  // タクソノミー名
        $tax_query = get_categories(array(
          'type'       => $post_type,
          'taxonomy'   => $tax_name,
          'parent'     => 0,
          'orderby'    => '',
          'order'      => 'ASC',
          'hide_empty' => false,
        ));
    foreach ((array)$tax_query as $tax): if (!$tax->parent): ?>

        <input type="checkbox" name="<?php echo $tax_name; ?>[]" id="checkbox_<?php echo urlencode($tax->term_id); ?>" value="<?php echo urlencode($tax->term_id); ?>"><label for="checkbox_<?php echo urlencode($tax->term_id); ?>"><?php echo $tax->name; ?></label><br>

            <?php //子カテゴリ用の処理　親のみの処理でいい場合は以下endifまで除去
                $child_cat_num = count(get_term_children($tax->cat_ID, $tax_name));
                if ($child_cat_num > 0):
                $tax_children_args = array('parent'=>$tax->cat_ID);
                $tax_children = get_categories(array(
                    'taxonomy'   => $tax_name,
                    'parent'     => $tax->cat_ID,
                    'orderby'    => '',
                    'order'      => 'ASC',
                    'hide_empty' => false,
                ));
            foreach ((array)$tax_children as $child_val): ?>

                --<input type="checkbox" name="<?php echo $tax_name; ?>[]" id="checkbox_<?php echo urlencode($child_val->term_id); ?>" value="<?php echo urlencode($child_val->term_id); ?>">
                    <label for="checkbox_<?php echo urlencode($child_val->term_id); ?>"><?php echo $child_val->name; ?></label><br>

            <?php endforeach; else: ?>
                <!-- 子カテゴリなしの時の記述 -->
            <?php endif; ?>

    <?php endif; endforeach; ?>
    </div>
    <!-- ☆☆☆　カテゴリー01　end　☆☆☆ -->


    <!-- ★★★　カテゴリー02　start　★★★ -->
    <div class="category-list">
        <h3>【 カテゴリ02 】</h3>
    <?php
        $tax_name = $postTaxName02;  // タクソノミー名
        $tax_query = get_categories(array(
          'type'       => $post_type,
          'taxonomy'   => $tax_name,
          'parent'     => 0,
          'orderby'    => '',
          'order'      => 'ASC',
          'hide_empty' => false,
        ));
    foreach ((array)$tax_query as $tax): if (!$tax->parent): ?>

        <input type="checkbox" name="<?php echo $tax_name; ?>[]" id="checkbox_<?php echo urlencode($tax->term_id); ?>" value="<?php echo urlencode($tax->term_id); ?>"><label for="checkbox_<?php echo urlencode($tax->term_id); ?>"><?php echo $tax->name; ?></label><br>

            <?php //子カテゴリ用の処理　親のみの処理でいい場合は以下endifまで除去
                $child_cat_num = count(get_term_children($tax->cat_ID, $tax_name));
                if ($child_cat_num > 0):
                $tax_children_args = array('parent'=>$tax->cat_ID);
                $tax_children = get_categories(array(
                    'taxonomy'   => $tax_name,
                    'parent'     => $tax->cat_ID,
                    'orderby'    => '',
                    'order'      => 'ASC',
                    'hide_empty' => false,
                ));
            foreach ((array)$tax_children as $child_val): ?>

                --<input type="checkbox" name="<?php echo $tax_name; ?>[]" id="checkbox_<?php echo urlencode($child_val->term_id); ?>" value="<?php echo urlencode($child_val->term_id); ?>">
                    <label for="checkbox_<?php echo urlencode($child_val->term_id); ?>"><?php echo $child_val->name; ?></label><br>

            <?php endforeach; else: ?>
                <!-- 子カテゴリなしの時の記述 -->
            <?php endif; ?>

    <?php endif; endforeach; ?>
    </div>
    <!-- ☆☆☆　カテゴリー02　end　☆☆☆ -->


    <!-- ★★★　カテゴリー03　start　★★★ -->
    <div class="category-list">
        <h3>【 カテゴリ03 】</h3>
    <?php
        $tax_name = $postTaxName03;  // タクソノミー名
        $tax_query = get_categories(array(
          'type'       => $post_type,
          'taxonomy'   => $tax_name,
          'parent'     => 0,
          'orderby'    => '',
          'order'      => 'ASC',
          'hide_empty' => false,
        ));
    foreach ((array)$tax_query as $tax): if (!$tax->parent): ?>

        <input type="checkbox" name="<?php echo $tax_name; ?>[]" id="checkbox_<?php echo urlencode($tax->term_id); ?>" value="<?php echo urlencode($tax->term_id); ?>"><label for="checkbox_<?php echo urlencode($tax->term_id); ?>"><?php echo $tax->name; ?></label><br>

            <?php //子カテゴリ用の処理　親のみの処理でいい場合は以下endifまで除去
                $child_cat_num = count(get_term_children($tax->cat_ID, $tax_name));
                if ($child_cat_num > 0):
                $tax_children_args = array('parent'=>$tax->cat_ID);
                $tax_children = get_categories(array(
                    'taxonomy'   => $tax_name,
                    'parent'     => $tax->cat_ID,
                    'orderby'    => '',
                    'order'      => 'ASC',
                    'hide_empty' => false,
                ));
            foreach ((array)$tax_children as $child_val): ?>

                --<input type="checkbox" name="<?php echo $tax_name; ?>[]" id="checkbox_<?php echo urlencode($child_val->term_id); ?>" value="<?php echo urlencode($child_val->term_id); ?>">
                    <label for="checkbox_<?php echo urlencode($child_val->term_id); ?>"><?php echo $child_val->name; ?></label><br>

            <?php endforeach; else: ?>
                <!-- 子カテゴリなしの時の記述 -->
            <?php endif; ?>

    <?php endif; endforeach; ?>
    </div>
    <!-- ☆☆☆　カテゴリー03　end　☆☆☆ -->


    <!-- ★★★　カテゴリー04　start　★★★ -->
    <!--
    <div class="category-list">
        <h3>【 カテゴリー04 】</h3>
    <?php
        $tax_name = $postTaxName04;  // タクソノミー名
        $tax_query = get_categories(array(
          'type'       => $post_type,
          'taxonomy'   => $tax_name,
          'parent'     => 0,
          'orderby'    => '',
          'order'      => 'ASC',
          'hide_empty' => false,
        ));
    foreach ((array)$tax_query as $tax): if (!$tax->parent): ?>

        <input type="checkbox" name="<?php echo $tax_name; ?>[]" id="checkbox_<?php echo urlencode($tax->term_id); ?>" value="<?php echo urlencode($tax->term_id); ?>"><label for="checkbox_<?php echo urlencode($tax->term_id); ?>"><?php echo $tax->name; ?></label><br>

            <?php //子カテゴリ用の処理　親のみの処理でいい場合は以下endifまで除去
                $child_cat_num = count(get_term_children($tax->cat_ID, $tax_name));
                if ($child_cat_num > 0):
                $tax_children_args = array('parent'=>$tax->cat_ID);
                $tax_children = get_categories(array(
                    'taxonomy'   => $tax_name,
                    'parent'     => $tax->cat_ID,
                    'orderby'    => '',
                    'order'      => 'ASC',
                    'hide_empty' => false,
                ));
            foreach ((array)$tax_children as $child_val): ?>

                --<input type="checkbox" name="<?php echo $tax_name; ?>[]" id="checkbox_<?php echo urlencode($child_val->term_id); ?>" value="<?php echo urlencode($child_val->term_id); ?>">
                    <label for="checkbox_<?php echo urlencode($child_val->term_id); ?>"><?php echo $child_val->name; ?></label><br>

            <?php endforeach; else: ?>
                 子カテゴリなしの時の記述
            <?php endif; ?>

    <?php endif; endforeach; ?>
    </div>
    -->
    <!-- ☆☆☆　カテゴリー04　end　☆☆☆ -->


    <!-- <input class="" name="text[]" type="text" placeholder="キーワードから探す"> -->
    <input type="submit" value="検索する">
</form>
</div>

