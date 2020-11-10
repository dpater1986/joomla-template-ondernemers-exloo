<?php defined('_JEXEC') or die('Restricted access');?>
<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
        <head>
                <jdoc:include type="head" />
                <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
                <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
                <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
        </head>
        <body>
                <div id="wrapper">
                        <div id="header" class="container">
				<div id="nav-wrap">
					<div id="logo">
						<a href="/" id="logo-url" class="ove-main-logo">Ondernemers vereniging Exloo</a>
					</div>
                                	<div id="menu">
						<div class="top-nav">
							<jdoc:include type="modules" name="navigation" /> 
						</div>
                        	        </div>
				</div>
			</div>
                        <div id="content">
                                <div id="focus">
					<?php if ($this->countModules('focus-picture')): ?>
					<div id="focus-picture">
						<jdoc:include type="modules" name="focus-picture" />
						<div id="focus-text">
							<jdoc:include type="modules" name="focus-text" />
						</div>
						<div id="focus-signup">
							<a href="/word-nu-lid" id="focus-signup-url" class="signup">Word nu lid</a>
						</div>
					</div>
					<?php endif ?>
					<?php if ($this->countModules('focus-blocks')): ?>
					<div id="focus-blocks">
						<jdoc:include type="modules" name="focus-blocks" />
					</div>
					<?php endif ?>
                                </div>
				<div id="main" class="container">
					<jdoc:include type="modules" name="top" />
                        		<jdoc:include type="component" />
				</div>
			</div>
			<div id="footer">
                        	<jdoc:include type="modules" name="footer" />
			</div>
                </div>
        </body>
</html>
