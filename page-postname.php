<?php get_header(); ?>

<?php
$post_type = 'postname'; // 投稿タイプ名を記入
$post_cate01 = $_GET['cate01']; // カテゴリー01のデータ
$post_cate02 = $_GET['cate02']; // カテゴリー02のデータ
$post_cate03 = $_GET['cate03']; // カテゴリー03のデータ
// $post_cate04 = $_GET['cate04']; // カテゴリー04のデータ
// $text = $_GET['text']; // [キーワードから探す]のデータ

// 記事を取得
$args = array(
  'post_type' => $post_type,
  'paged' => get_query_var('paged'), // wp-pagerが使える
  'posts_per_page'   => -1,
  'orderby'          => 'date',
  'order'            => 'DESC',
  'post_status'      => 'publish',
  'caller_get_posts' => 1,
  'tax_query'        => array( 'relation' => 'AND'), // AND か OR で絞り込みまたは包括検索へ変更可
  // 'meta_query'       => array( 'relation' => 'OR'), // [キーワードから探す]のデータ、AND か OR で同略・・・
  );

//カテゴリー01のデータ
if (isset($post_cate01)){
  $taxquery_cate01 = array(
     'taxonomy' => 'cate01',
     'terms' => $post_cate01,
     'field' => 'term_id',
     'operator' => 'AND', // AND か OR で同略・・・
     // 'include_children' => false,
    );
    array_push($args['tax_query'],array( $taxquery_cate01 ));
}

//カテゴリー02のデータ
if (isset($post_cate02)){
  $taxquery_cate02 = array(
     'taxonomy' => 'cate02',
     'terms' => $post_cate02,
     'field' => 'term_id',
     'operator' => 'AND', // AND か OR で同略・・・
     // 'include_children' => false,
    );
    array_push($args['tax_query'],array( $taxquery_cate02 ));
}

//カテゴリー03のデータ
if (isset($post_cate03)){
  $taxquery_cate03 = array(
     'taxonomy' => 'cate03',
     'terms' => $post_cate03,
     'field' => 'term_id',
     'operator' => 'AND', // AND か OR で同略・・・
     // 'include_children' => false,
    );
    array_push($args['tax_query'],array( $taxquery_cate03 ));
}

// カテゴリー04のデータ
// if (isset($post_cate04)){
//   $taxquery_cate04 = array(
//      'taxonomy' => 'cate04',
//      'terms' => $post_cate04,
//      'field' => 'term_id',
//      'operator' => 'AND', // AND か OR で同略・・・
//      // 'include_children' => false,
//     );
//     array_push($args['tax_query'],array( $taxquery_cate04 ));
// }

// [キーワードから探す]の検索文字列をクエリに追加
// if ($text){
//   foreach( $text as $sWord ) { if ($sWord) {
//     array_push($args['meta_query'], array('key'=>'fieldのslug名','value'=>$sWord,'compare'=>'LIKE',));
//     array_push($args['meta_query'], array('key'=>'fieldのslug名','value'=>$sWord,'compare'=>'LIKE',));
//     array_push($args['meta_query'], array('key'=>'fieldのslug名','value'=>$sWord,'compare'=>'LIKE',));
// } } }


$wp_query = new WP_Query($args);
?>

<div class="post-list">
  <div class="post-list-inner">
    <h1>【 検索結果 】</h1>
    <p class="postCount"><?php my_result_count(); ?></p><br>

    <?php if ( have_posts() ): // 記事一覧を出力します ?>
    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

          <div class="post-clmn">
            <a href="<?php the_permalink(); ?>">
              <h2>記事タイトル：<b><?php the_title(); ?></b></h2>
            </a>
          </div>

    <?php endwhile; ?>
    <?php else: // 記事が見つからなかったときの出力 ?>
      <div class="post-clmn">
        <a href="<?php echo home_url(); ?>">
          <h2>記事は見つかりませんでした。TOPページに戻りましょう。</h2>
        </a>
      </div>
    <?php endif; ?>

  </div>
</div>

<?php get_footer(); ?>
