<!-- Microdata. Begin -->
<div itemscope itemtype="http://schema.org/WebPage" style="display:none">
	<span itemprop="description"><?php echo $header_description;?></span>
	<span itemprop="image"><?php echo $base_url?>assets/img/logo.png</span>
	<span itemprop="name"><?php echo $header_title; ?></span>
	<span itemprop="url"><?php echo $base_url?></span>
	<div itemprop="author" itemscope itemtype="http://schema.org/Corporation" >
		<span itemprop="description"><?php echo $header_description;?></span>
		<span itemprop="image"><?php echo $base_url?>assets/img/logo.png</span>
		<span itemprop="name"><?php echo $header_title; ?></span>
		<span itemprop="url"><?php echo $base_url?></span>
		<!-- <div itemprop="contactPoint" itemscope itemtype="http://schema.org/ContactPoint">
			<span itemprop="telephone">+52 800 007 70 66</span>
			<span itemprop="contactType">sales</span>
		</div> -->
		<div itemprop="Brand" itemscope itemtype="http://www.schema.org/Brand">
			<span itemprop="name"><?php echo $header_title; ?></span>
			<span itemprop="url"><?php echo $base_url?></span>
			<span itemprop="logo"><?php echo $base_url?>assets/img/logo.png</span>
		</div>
		<div itemprop="location" itemscope itemtype="http://schema.org/Place" >
			<span itemprop="description"><?php echo $header_description;?></span>
			<span itemprop="image"><?php echo $base_url?>assets/img/logo.png</span>
			<span itemprop="name"><?php echo $header_title; ?></span>
			<span itemprop="url"><?php echo $base_url?></span>
			<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
				<span itemprop="streetAddress">Calzada Legaria 549, Colonia 10 de Abril, Delegación Miguel Hidalgo, Ciudad de México</span>
				<span itemprop="addressLocality">CDMX</span>
				<span itemprop="addressRegion">México</span>
				<span itemprop="postalCode">11250</span>
			</div>
			<div itemprop="geo" itemscope itemtype="http://schema.org/GeoCoordinates">
				<meta itemprop="latitude" content="19.447982" />
				<meta itemprop="longitude" content="-99.206787" />
			</div>
		</div>
	</div>
</div>
<!-- Microdata. End -->