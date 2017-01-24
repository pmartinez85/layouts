<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>

	.wrapper {
		display: flex;
		flex-flow: row wrap;
	}

	* {
		border: 1px black solid;

	}

	header, footer {
		flex: 1 100%;
		background: darkslateblue;
	}
	.content {
		flex: 2 70%;
		text-align: center;
		margin: 0 auto;
		background: #122b40;
		max-width: 80%;
	}
	.row {
		display: flex;
		background: black;

	}
	.col {
		background: coral;
		flex: 1 1 400px;

	}

	.col:nth-child(2) {
		flex: 2 1 20%;
	}
	.col:nth-child(5){
		flex: 1 2 50%;
	}

	nav,aside {
		flex: 1;
		background: slategrey;
	}
	@media all and (min-width: 600px){

		header {
			order:1;
		}
		nav {
			order:2;
		}
		.content {
			order:3;
		}
		aside {
			order:4;
		}
		footer {
			order:5;
		}
	}


</style>

<body>
<div class="wrapper">
	<header>Header here!!!</header>
	<nav>
		<ul>
			<li>Lorem.</li>
			<li>Animi.</li>
			<li>Tempore?</li>
			<li>Aspernatur.</li>
			<li>Optio!</li>
		</ul>
	</nav>
	<section class="content">
		<header>Content Header Here</header>

			<div class="row">
				<div class="col">
				<section>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ea fuga illum natus nihil obcaecati officia, pariatur quam quasi rem. A accusantium aliquid architecto cum delectus dignissimos distinctio dolorum ducimus earum eos eveniet excepturi exercitationem illo ipsa ipsam libero magnam, minus nam nulla odio placeat praesentium quae quaerat quidem quis quod ratione reprehenderit repudiandae sint sit tenetur voluptate voluptatibus voluptatum? Autem distinctio enim excepturi fugit, perspiciatis quod? Accusamus aperiam, at, cupiditate ea eius excepturi illo illum iure labore necessitatibus qui ratione, rem rerum similique suscipit tempora voluptates! Ab alias aliquam assumenda consequatur, deserunt ex iure laudantium maxime repellat sint. Molestias.</section>
				<section>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ea fuga illum natus nihil obcaecati officia, pariatur quam quasi rem. A accusantium aliquid architecto cum delectus dignissimos distinctio dolorum ducimus earum eos eveniet excepturi exercitationem illo ipsa ipsam libero magnam, minus nam nulla odio placeat praesentium quae quaerat quidem quis quod ratione reprehenderit repudiandae sint sit tenetur voluptate voluptatibus voluptatum? Autem distinctio enim excepturi fugit, perspiciatis quod? Accusamus aperiam, at, cupiditate ea eius excepturi illo illum iure labore necessitatibus qui ratione, rem rerum similique suscipit tempora voluptates! Ab alias aliquam assumenda consequatur, deserunt ex iure laudantium maxime repellat sint. Molestias.</section>
				<section>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ea fuga illum natus nihil obcaecati officia, pariatur quam quasi rem. A accusantium aliquid architecto cum delectus dignissimos distinctio dolorum ducimus earum eos eveniet excepturi exercitationem illo ipsa ipsam libero magnam, minus nam nulla odio placeat praesentium quae quaerat quidem quis quod ratione reprehenderit repudiandae sint sit tenetur voluptate voluptatibus voluptatum? Autem distinctio enim excepturi fugit, perspiciatis quod? Accusamus aperiam, at, cupiditate ea eius excepturi illo illum iure labore necessitatibus qui ratione, rem rerum similique suscipit tempora voluptates! Ab alias aliquam assumenda consequatur, deserunt ex iure laudantium maxime repellat sint. Molestias.</section>
				<section>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ea fuga illum natus nihil obcaecati officia, pariatur quam quasi rem. A accusantium aliquid architecto cum delectus dignissimos distinctio dolorum ducimus earum eos eveniet excepturi exercitationem illo ipsa ipsam libero magnam, minus nam nulla odio placeat praesentium quae quaerat quidem quis quod ratione reprehenderit repudiandae sint sit tenetur voluptate voluptatibus voluptatum? Autem distinctio enim excepturi fugit, perspiciatis quod? Accusamus aperiam, at, cupiditate ea eius excepturi illo illum iure labore necessitatibus qui ratione, rem rerum similique suscipit tempora voluptates! Ab alias aliquam assumenda consequatur, deserunt ex iure laudantium maxime repellat sint. Molestias.</section>
			</div>
			</div>
		<div class="row">
			<div class="col">
				<section>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ea fuga illum natus nihil obcaecati officia, pariatur quam quasi rem. A accusantium aliquid architecto cum delectus dignissimos distinctio dolorum ducimus earum eos eveniet excepturi exercitationem illo ipsa ipsam libero magnam, minus nam nulla odio placeat praesentium quae quaerat quidem quis quod ratione reprehenderit repudiandae sint sit tenetur voluptate voluptatibus voluptatum? Autem distinctio enim excepturi fugit, perspiciatis quod? Accusamus aperiam, at, cupiditate ea eius excepturi illo illum iure labore necessitatibus qui ratione, rem rerum similique suscipit tempora voluptates! Ab alias aliquam assumenda consequatur, deserunt ex iure laudantium maxime repellat sint. Molestias.</section>
				<section>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ea fuga illum natus nihil obcaecati officia, pariatur quam quasi rem. A accusantium aliquid architecto cum delectus dignissimos distinctio dolorum ducimus earum eos eveniet excepturi exercitationem illo ipsa ipsam libero magnam, minus nam nulla odio placeat praesentium quae quaerat quidem quis quod ratione reprehenderit repudiandae sint sit tenetur voluptate voluptatibus voluptatum? Autem distinctio enim excepturi fugit, perspiciatis quod? Accusamus aperiam, at, cupiditate ea eius excepturi illo illum iure labore necessitatibus qui ratione, rem rerum similique suscipit tempora voluptates! Ab alias aliquam assumenda consequatur, deserunt ex iure laudantium maxime repellat sint. Molestias.</section>
				<section>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ea fuga illum natus nihil obcaecati officia, pariatur quam quasi rem. A accusantium aliquid architecto cum delectus dignissimos distinctio dolorum ducimus earum eos eveniet excepturi exercitationem illo ipsa ipsam libero magnam, minus nam nulla odio placeat praesentium quae quaerat quidem quis quod ratione reprehenderit repudiandae sint sit tenetur voluptate voluptatibus voluptatum? Autem distinctio enim excepturi fugit, perspiciatis quod? Accusamus aperiam, at, cupiditate ea eius excepturi illo illum iure labore necessitatibus qui ratione, rem rerum similique suscipit tempora voluptates! Ab alias aliquam assumenda consequatur, deserunt ex iure laudantium maxime repellat sint. Molestias.</section>
				<section>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ea fuga illum natus nihil obcaecati officia, pariatur quam quasi rem. A accusantium aliquid architecto cum delectus dignissimos distinctio dolorum ducimus earum eos eveniet excepturi exercitationem illo ipsa ipsam libero magnam, minus nam nulla odio placeat praesentium quae quaerat quidem quis quod ratione reprehenderit repudiandae sint sit tenetur voluptate voluptatibus voluptatum? Autem distinctio enim excepturi fugit, perspiciatis quod? Accusamus aperiam, at, cupiditate ea eius excepturi illo illum iure labore necessitatibus qui ratione, rem rerum similique suscipit tempora voluptates! Ab alias aliquam assumenda consequatur, deserunt ex iure laudantium maxime repellat sint. Molestias.</section>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<section>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ea fuga illum natus nihil obcaecati officia, pariatur quam quasi rem. A accusantium aliquid architecto cum delectus dignissimos distinctio dolorum ducimus earum eos eveniet excepturi exercitationem illo ipsa ipsam libero magnam, minus nam nulla odio placeat praesentium quae quaerat quidem quis quod ratione reprehenderit repudiandae sint sit tenetur voluptate voluptatibus voluptatum? Autem distinctio enim excepturi fugit, perspiciatis quod? Accusamus aperiam, at, cupiditate ea eius excepturi illo illum iure labore necessitatibus qui ratione, rem rerum similique suscipit tempora voluptates! Ab alias aliquam assumenda consequatur, deserunt ex iure laudantium maxime repellat sint. Molestias.</section>
				<section>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ea fuga illum natus nihil obcaecati officia, pariatur quam quasi rem. A accusantium aliquid architecto cum delectus dignissimos distinctio dolorum ducimus earum eos eveniet excepturi exercitationem illo ipsa ipsam libero magnam, minus nam nulla odio placeat praesentium quae quaerat quidem quis quod ratione reprehenderit repudiandae sint sit tenetur voluptate voluptatibus voluptatum? Autem distinctio enim excepturi fugit, perspiciatis quod? Accusamus aperiam, at, cupiditate ea eius excepturi illo illum iure labore necessitatibus qui ratione, rem rerum similique suscipit tempora voluptates! Ab alias aliquam assumenda consequatur, deserunt ex iure laudantium maxime repellat sint. Molestias.</section>
				<section>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ea fuga illum natus nihil obcaecati officia, pariatur quam quasi rem. A accusantium aliquid architecto cum delectus dignissimos distinctio dolorum ducimus earum eos eveniet excepturi exercitationem illo ipsa ipsam libero magnam, minus nam nulla odio placeat praesentium quae quaerat quidem quis quod ratione reprehenderit repudiandae sint sit tenetur voluptate voluptatibus voluptatum? Autem distinctio enim excepturi fugit, perspiciatis quod? Accusamus aperiam, at, cupiditate ea eius excepturi illo illum iure labore necessitatibus qui ratione, rem rerum similique suscipit tempora voluptates! Ab alias aliquam assumenda consequatur, deserunt ex iure laudantium maxime repellat sint. Molestias.</section>
				<section>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ea fuga illum natus nihil obcaecati officia, pariatur quam quasi rem. A accusantium aliquid architecto cum delectus dignissimos distinctio dolorum ducimus earum eos eveniet excepturi exercitationem illo ipsa ipsam libero magnam, minus nam nulla odio placeat praesentium quae quaerat quidem quis quod ratione reprehenderit repudiandae sint sit tenetur voluptate voluptatibus voluptatum? Autem distinctio enim excepturi fugit, perspiciatis quod? Accusamus aperiam, at, cupiditate ea eius excepturi illo illum iure labore necessitatibus qui ratione, rem rerum similique suscipit tempora voluptates! Ab alias aliquam assumenda consequatur, deserunt ex iure laudantium maxime repellat sint. Molestias.</section>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<section>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ea fuga illum natus nihil obcaecati officia, pariatur quam quasi rem. A accusantium aliquid architecto cum delectus dignissimos distinctio dolorum ducimus earum eos eveniet excepturi exercitationem illo ipsa ipsam libero magnam, minus nam nulla odio placeat praesentium quae quaerat quidem quis quod ratione reprehenderit repudiandae sint sit tenetur voluptate voluptatibus voluptatum? Autem distinctio enim excepturi fugit, perspiciatis quod? Accusamus aperiam, at, cupiditate ea eius excepturi illo illum iure labore necessitatibus qui ratione, rem rerum similique suscipit tempora voluptates! Ab alias aliquam assumenda consequatur, deserunt ex iure laudantium maxime repellat sint. Molestias.</section>
				<section>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ea fuga illum natus nihil obcaecati officia, pariatur quam quasi rem. A accusantium aliquid architecto cum delectus dignissimos distinctio dolorum ducimus earum eos eveniet excepturi exercitationem illo ipsa ipsam libero magnam, minus nam nulla odio placeat praesentium quae quaerat quidem quis quod ratione reprehenderit repudiandae sint sit tenetur voluptate voluptatibus voluptatum? Autem distinctio enim excepturi fugit, perspiciatis quod? Accusamus aperiam, at, cupiditate ea eius excepturi illo illum iure labore necessitatibus qui ratione, rem rerum similique suscipit tempora voluptates! Ab alias aliquam assumenda consequatur, deserunt ex iure laudantium maxime repellat sint. Molestias.</section>
				<section>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ea fuga illum natus nihil obcaecati officia, pariatur quam quasi rem. A accusantium aliquid architecto cum delectus dignissimos distinctio dolorum ducimus earum eos eveniet excepturi exercitationem illo ipsa ipsam libero magnam, minus nam nulla odio placeat praesentium quae quaerat quidem quis quod ratione reprehenderit repudiandae sint sit tenetur voluptate voluptatibus voluptatum? Autem distinctio enim excepturi fugit, perspiciatis quod? Accusamus aperiam, at, cupiditate ea eius excepturi illo illum iure labore necessitatibus qui ratione, rem rerum similique suscipit tempora voluptates! Ab alias aliquam assumenda consequatur, deserunt ex iure laudantium maxime repellat sint. Molestias.</section>
				<section>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ea fuga illum natus nihil obcaecati officia, pariatur quam quasi rem. A accusantium aliquid architecto cum delectus dignissimos distinctio dolorum ducimus earum eos eveniet excepturi exercitationem illo ipsa ipsam libero magnam, minus nam nulla odio placeat praesentium quae quaerat quidem quis quod ratione reprehenderit repudiandae sint sit tenetur voluptate voluptatibus voluptatum? Autem distinctio enim excepturi fugit, perspiciatis quod? Accusamus aperiam, at, cupiditate ea eius excepturi illo illum iure labore necessitatibus qui ratione, rem rerum similique suscipit tempora voluptates! Ab alias aliquam assumenda consequatur, deserunt ex iure laudantium maxime repellat sint. Molestias.</section>
			</div>
		</div>


	</section>
	<aside>
		Aqui Barra lateral
	</aside>

	<footer>
		Copyright Klavius Inc.
	</footer>
</div>
</body>
</html>