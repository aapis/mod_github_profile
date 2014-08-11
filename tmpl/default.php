<div class="github-profile">
	<header>
		<h1><img src="<?php echo $user->avatar_url; ?>" /> <a href="https://github.com/<?php echo $user->login; ?>" target="_blank"><?php echo $user->name; ?></a></h1>
	</header>
	
	<section class="about">
		<ul>
			<?php if($user->created_at > 0): ?>
				<li>Member since <strong><?php echo date("F Y", strtotime($user->created_at)); ?></strong></li>
			<?php endif; ?>

			<?php if($user->company): ?>
				<li>Works for <strong><?php echo $user->company; ?></strong>.</li>
			<?php endif; ?>

			<?php if($user->public_repos > 0): ?>
				<li><strong><?php echo $user->public_repos; ?></strong> public repositories.</li>
			<?php endif; ?>

			<?php if($user->followers > 0 && $user->following > 0): ?>
				<li>Has <strong><?php echo $user->followers; ?></strong> follower(s) and follows <strong><?php echo $user->following; ?></strong>.</li>
			<?php endif; ?>
		</ul>
	</section>
</div>