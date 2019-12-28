
<footer>フッターだよ！！ </footer>

<?php wp_footer(); ?>

<style>
	header{ padding: 4rem; text-align: center; font-size: 24px; font-weight: bold;}
    footer{ padding: 4rem; text-align: center; font-size: 24px; font-weight: bold; }

	/*  検索結果ページ　start  */
	.post-list{
		width: 100%;
		padding: 60px 10px 50px;
		background: #f2f6f7;
	}
	.post-list-inner{
		max-width: 1080px;
		margin: 0 auto;
	}
	.post-clmn{
		border-radius: 10px;
		padding: 20px;
		background: #fff;
		margin-bottom: 20px;
	}
	.post-clmn a{ display: block; }
	/*  検索結果ページ　end  */

	/*  _categoryBox　start  */
	p{ font-weight: bold; }
	.new-serch{
	    display: block;
	    width: 100%;
	    background: #ccc;
	    padding: 4% 0;
	}
	.new-serch form{
	    display: block;
	    width: 100%;
	    max-width: 1080px;
	    margin: 0 auto;
	    padding: 20px;
	    border-radius: 10px;
	    background: #fff;
	    min-height: 200px;
	}
	.category-list{
	    margin-bottom: 20px;
	    display: inline-block;
	    vertical-align: top;
	    width: 30%;
	}
	input[type="submit"]{
	    color: #fff;
	    background: blue;
	    font-weight: bold;
	    padding: 10px;
	    border-radius: 10px;
	    vertical-align: bottom;
	}
	label{
	    font-size: 1.4rem;
	    color: #75758b;
	    line-height: 3;
	}
	/*  _categoryBox　start  */
</style>

</body>
</html>
