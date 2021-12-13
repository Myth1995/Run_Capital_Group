<?php $__env->startSection('title'); ?>Button Builder
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/button-builder.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Button Builder</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item active">Button Builder</li>
    <?php if (isset($__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0)): ?>
<?php $component = $__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0; ?>
<?php unset($__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Button Builder</h5>
                    </div>
                    <div class="card-body">
                        <div class="button-builder-wrap">
                            <div class="row">
                                <div class="col-md-6 col-lg-7 order-2 order-xl-1">
                                    <div class="form-horizontal generator theme-form">
                                        <div class="form-group row">
                                            <label class="col col-form-label">Buttons Text</label>
                                            <div class="col-lg-9">
                                                <input class="form-control button-text" type="text" value="Button" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col col-form-label">Element Type</label>
                                            <div class="col-lg-9">
                                                <div class="element-type grp-btns" data-bs-toggle="buttons">
                                                    <label class="btn btn-light active"> <input type="radio" name="type" value="a" /> Anchor </label>
                                                    <label class="btn btn-light"> <input type="radio" name="type" value="button" /> Button </label>
                                                    <label class="btn btn-light"> <input type="radio" name="type" value="input" /> Input </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col col-form-label">Button Size</label>
                                        <div class="col-lg-9">
                                            <div class="button-size grp-btns" data-bs-toggle="buttons">
                                                <label class="btn btn-light active"> <input type="radio" name="size" value="btn-lg" /> Large </label>
                                                <label class="btn btn-light"> <input type="radio" name="size" value="" /> Default </label>
                                                <label class="btn btn-light"> <input type="radio" name="size" value="btn-sm" /> Mini </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col col-form-label button-style">Button Style</label>
                                        <div class="col-lg-9">
                                            <div class="button-color-option">
                                                <label class="me-3"> <input type="radio" name="color-option" checked="checked" value="bootstrap" /> Bootstrap Inbuilt </label>
                                                <label> <input type="radio" name="color-option" value="custom" /> Custom </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bootstrap-inbuilt-style">
                                        <div class="form-group row">
                                            <label class="col col-form-label">Button Type</label>
                                            <div class="col-lg-9">
                                                <div class="button-color grp-btns" data-bs-toggle="buttons">
                                                    <label class="btn btn-primary"> <input type="radio" name="color" value="btn btn-primary" /> Primary </label>
                                                    <label class="btn btn-secondary"> <input type="radio" name="color" value="btn btn-secondary" /> Seconadary </label>
                                                    <label class="btn btn-success active"> <input type="radio" name="color" value="btn btn-success" /> Success </label>
                                                    <label class="btn btn-info"> <input type="radio" name="color" value="btn btn-info" /> Info </label>
                                                    <label class="btn btn-warning"> <input type="radio" name="color" value="btn btn-warning" /> Warning </label>
                                                    <label class="btn btn-danger"> <input type="radio" name="color" value="btn btn-danger" /> Danger </label>
                                                    <label class="btn btn-light"> <input type="radio" name="color" value="btn btn-light" /> Light </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col col-form-label">Button State</label>
                                            <div class="col-lg-9">
                                                <div class="button-state grp-btns" data-bs-toggle="buttons">
                                                    <label class="btn btn-light active"> <input type="radio" name="state" value="normal" /> Normal </label>
                                                    <label class="btn btn-light"> <input type="radio" name="state" value="active" /> Active </label>
                                                    <label class="btn btn-light"> <input type="radio" name="state" value="disabled" /> Disabled </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col col-form-label">Button Width</label>
                                        <div class="col-lg-9">
                                            <div class="button-width grp-btns" data-bs-toggle="buttons">
                                                <label class="btn btn-light active"> <input type="radio" name="width" value="" /> Auto </label>
                                                <label class="btn btn-light"> <input type="radio" name="width" value="btn-block" /> Full Width </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-button-color">
                                        <div class="form-group row">
                                            <label class="col col-form-label" for="textColor">Text & Icon Color</label>
                                            <div class="col-lg-9">
                                                <input class="form-control input-sm pull-left" id="textColor" type="text" maxlength="6" size="6" />
                                                <div class="color-slelector" id="colorSelector1">
                                                    <div></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col col-form-label" for="topColor">Gradient Top Color</label>
                                            <div class="col-lg-9">
                                                <input class="form-control input-sm pull-left" id="topColor" type="text" maxlength="6" size="6" />
                                                <div class="color-slelector" id="colorSelector2">
                                                    <div></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col col-form-label" for="bottomColor">Gradient Bottom Color</label>
                                            <div class="col-lg-9">
                                                <input class="form-control input-sm pull-left" id="bottomColor" type="text" maxlength="6" size="6" />
                                                <div class="color-slelector" id="colorSelector3">
                                                    <div></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col col-form-label" for="bgColor">Background Color</label>
                                            <div class="col-lg-9">
                                                <input class="form-control input-sm pull-left" id="bgColor" type="text" maxlength="6" size="6" />
                                                <div class="color-slelector" id="colorSelector4">
                                                    <div></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col col-form-label" for="borderTopColor">Border Top Color</label>
                                            <div class="col-lg-9">
                                                <input class="form-control input-sm pull-left" id="borderTopColor" type="text" maxlength="6" size="6" />
                                                <div class="color-slelector" id="colorSelector5">
                                                    <div></div>
                                                </div>
                                                <label class="hint-label border-all"> <input type="checkbox" name="border-all" /> Use same color for all sides </label>
                                            </div>
                                        </div>
                                        <div class="border-color-separate">
                                            <div class="form-group row">
                                                <label class="col col-form-label" for="borderHrColor">Border Left & Right Color</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control input-sm pull-left" id="borderHrColor" type="text" maxlength="6" size="6" />
                                                    <div class="color-slelector" id="colorSelector6">
                                                        <div></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col col-form-label" for="borderBottomColor">Border Bottom Color</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control input-sm pull-left" id="borderBottomColor" type="text" maxlength="6" size="6" />
                                                    <div class="color-slelector" id="colorSelector7">
                                                        <div></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" id="iconOption">
                                        <label class="col col-form-label">Icon</label>
                                        <div class="col-lg-9">
                                            <div class="include-icon grp-btns" data-bs-toggle="buttons">
                                                <label class="btn btn-light active"> <input type="radio" name="includeicon" value="1" /><span class="fa fa-check"></span> </label>
                                                <label class="btn btn-light"> <input type="radio" name="includeicon" value="0" /><span class="fa fa-times"></span> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row toggle">
                                        <label class="col col-form-label">Icon Position</label>
                                        <div class="col-lg-9">
                                            <div class="fa-position grp-btns" data-bs-toggle="buttons">
                                                <label class="btn btn-light active"> <input type="radio" name="iconposition" value="left" /><span class="fa fa-arrow-left"></span> Left </label>
                                                <label class="btn btn-light"> <input type="radio" name="iconposition" value="right" /> Right <span class="fa fa-arrow-right"></span> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row toggle">
                                        <label class="col col-form-label">Choose Icon</label>
                                        <div class="col-lg-9">
                                            <div class="nav nav-pills mb-3" id="pills-tab-icon">
                                                <a class="btn btn-light" id="fontawesome-tab" data-bs-toggle="pill" href="#pills-fontawesome" aria-controls="pills-fontawesome">Font Awesome</a>
                                                <a class="btn btn-light" id="icoicon-tab" data-bs-toggle="pill" href="#pills-icoicon" aria-controls="pills-icoicon">Ico Icons</a>
                                                <a class="btn btn-light active" id="themify-tab" data-bs-toggle="pill" href="#pills-themify" aria-controls="pills-themify">Themify</a>
                                            </div>
                                            <div class="tab-content">
                                                <div class="tab-pane fade" id="pills-fontawesome" role="tabpanel" aria-labelledby="fontawesome-tab">
                                                    <ul class="the-icons clearfix">
                                                        <li><span class="fa fa-bluetooth"></span><em> fa fa-bluetooth</em></li>
                                                        <li><span class="fa fa-bluetooth-b"></span><em> fa fa-bluetooth-b</em></li>
                                                        <li><span class="fa fa-codiepie"></span><em> fa fa-codiepie</em></li>
                                                        <li><span class="fa fa-credit-card-alt"></span><em>fa fa-credit-card-alt</em></li>
                                                        <li><span class="fa fa-edge"></span><em>fa fa-edge</em></li>
                                                        <li><span class="fa fa-fort-awesome"></span><em>fa fa-fort-awesome</em></li>
                                                        <li><span class="fa fa-hashtag"></span><em>fa fa-hashtag</em></li>
                                                        <li><span class="fa fa-mixcloud"></span><em>fa fa-mixcloud</em></li>
                                                        <li><span class="fa fa-modx"></span><em>fa fa-modx</em></li>
                                                        <li><span class="fa fa-pause-circle"></span><em>fa fa-pause-circle</em></li>
                                                        <li><span class="fa fa-pause-circle-o"></span><em>fa fa-pause-circle-o</em></li>
                                                        <li><span class="fa fa-percent"></span><em>fa fa-percent</em></li>
                                                        <li><span class="fa fa-product-hunt"></span><em>fa fa-product-hunt</em></li>
                                                        <li><span class="fa fa-reddit-alien"></span><em>fa fa-reddit-alien</em></li>
                                                        <li><span class="fa fa-scribd"></span><em>fa fa-scribd</em></li>
                                                        <li><span class="fa fa-shopping-bag"></span><em>fa fa-shopping-bag</em></li>
                                                        <li><span class="fa fa-shopping-basket"></span><em>fa fa-shopping-basket</em></li>
                                                        <li><span class="fa fa-stop-circle"></span><em>fa fa-stop-circle</em></li>
                                                        <li><span class="fa fa-stop-circle-o"></span><em>fa fa-stop-circle-o</em></li>
                                                        <li><span class="fa fa-usb"></span><em>fa fa-usb</em></li>
                                                        <li><span class="fa fa-dollar"></span><em> fa-dollar </em></li>
                                                        <li><span class="fa fa-eur"></span><em> fa-eur</em></li>
                                                        <li><span class="fa fa-euro"></span><em> fa-euro </em></li>
                                                        <li><span class="fa fa-gbp"></span><em> fa-gbp</em></li>
                                                        <li><span class="fa fa-inr"></span><em> fa-inr</em></li>
                                                        <li><span class="fa fa-jpy"></span><em> fa-jpy</em></li>
                                                        <li><span class="fa fa-krw"></span><em> fa-krw</em></li>
                                                        <li><span class="fa fa-money"></span><em> fa-money</em></li>
                                                        <li><span class="fa fa-rmb"></span><em> fa-rmb </em></li>
                                                        <li><span class="fa fa-rouble"></span><em> fa-rouble </em></li>
                                                        <li><span class="fa fa-rub"></span><em> fa-rub</em></li>
                                                        <li><span class="fa fa-ruble"></span><em> fa-ruble </em></li>
                                                        <li><span class="fa fa-rupee"></span><em> fa-rupee </em></li>
                                                        <li><span class="fa fa-try"></span><em> fa-try</em></li>
                                                        <li><span class="fa fa-turkish-lira"></span><em> fa-turkish-lira </em></li>
                                                        <li><span class="fa fa-usd"></span><em> fa-usd</em></li>
                                                        <li><span class="fa fa-won"></span><em> fa-won </em></li>
                                                        <li><span class="fa fa-yen"></span><em> fa-yen </em></li>
                                                        <li><span class="fa fa-adjust"></span><em> fa-adjust</em></li>
                                                        <li><span class="fa fa-anchor"></span><em> fa-anchor</em></li>
                                                        <li><span class="fa fa-archive"></span><em> fa-archive</em></li>
                                                        <li><span class="fa fa-arrows"></span><em> fa-arrows</em></li>
                                                        <li><span class="fa fa-arrows-h"></span><em> fa-arrows-h</em></li>
                                                        <li><span class="fa fa-arrows-v"></span><em> fa-arrows-v</em></li>
                                                        <li><span class="fa fa-asterisk"></span><em> fa-asterisk</em></li>
                                                        <li><span class="fa fa-automobile"></span><em> fa-automobile </em></li>
                                                        <li><span class="fa fa-ban"></span><em> fa-ban</em></li>
                                                        <li><span class="fa fa-bank"></span><em> fa-bank </em></li>
                                                        <li><span class="fa fa-bar-chart-o"></span><em> fa-bar-chart-o</em></li>
                                                        <li><span class="fa fa-barcode"></span><em> fa-barcode</em></li>
                                                        <li><span class="fa fa-bars"></span><em> fa-bars</em></li>
                                                        <li><span class="fa fa-beer"></span><em> fa-beer</em></li>
                                                        <li><span class="fa fa-bell"></span><em> fa-bell</em></li>
                                                        <li><span class="fa fa-bell-o"></span><em> fa-bell-o</em></li>
                                                        <li><span class="fa fa-bolt"></span><em> fa-bolt</em></li>
                                                        <li><span class="fa fa-bomb"></span><em> fa-bomb</em></li>
                                                        <li><span class="fa fa-book"></span><em> fa-book</em></li>
                                                        <li><span class="fa fa-bookmark"></span><em> fa-bookmark</em></li>
                                                        <li><span class="fa fa-bookmark-o"></span><em> fa-bookmark-o</em></li>
                                                        <li><span class="fa fa-briefcase"></span><em> fa-briefcase</em></li>
                                                        <li><span class="fa fa-bug"></span><em> fa-bug</em></li>
                                                        <li><span class="fa fa-building"></span><em> fa-building</em></li>
                                                        <li><span class="fa fa-building-o"></span><em> fa-building-o</em></li>
                                                        <li><span class="fa fa-bullhorn"></span><em> fa-bullhorn</em></li>
                                                        <li><span class="fa fa-bullseye"></span><em> fa-bullseye</em></li>
                                                        <li><span class="fa fa-cab"></span><em> fa-cab </em></li>
                                                        <li><span class="fa fa-calendar"></span><em> fa-calendar</em></li>
                                                        <li><span class="fa fa-calendar-o"></span><em> fa-calendar-o</em></li>
                                                        <li><span class="fa fa-camera"></span><em> fa-camera</em></li>
                                                        <li><span class="fa fa-camera-retro"></span><em> fa-camera-retro</em></li>
                                                        <li><span class="fa fa-car"></span><em> fa-car</em></li>
                                                        <li><span class="fa fa-caret-square-o-down"></span><em> fa-caret-square-o-down</em></li>
                                                        <li><span class="fa fa-caret-square-o-left"></span><em> fa-caret-square-o-left</em></li>
                                                        <li><span class="fa fa-caret-square-o-right"></span><em> fa-caret-square-o-right</em></li>
                                                        <li><span class="fa fa-caret-square-o-up"></span><em> fa-caret-square-o-up</em></li>
                                                        <li><span class="fa fa-certificate"></span><em> fa-certificate</em></li>
                                                        <li><span class="fa fa-check"></span><em> fa-check</em></li>
                                                        <li><span class="fa fa-check-circle"></span><em> fa-check-circle</em></li>
                                                        <li><span class="fa fa-check-circle-o"></span><em> fa-check-circle-o</em></li>
                                                        <li><span class="fa fa-check-square"></span><em> fa-check-square</em></li>
                                                        <li><span class="fa fa-check-square-o"></span><em> fa-check-square-o</em></li>
                                                        <li><span class="fa fa-child"></span><em> fa-child</em></li>
                                                        <li><span class="fa fa-circle"></span><em> fa-circle</em></li>
                                                        <li><span class="fa fa-circle-o"></span><em> fa-circle-o</em></li>
                                                        <li><span class="fa fa-circle-o-notch"></span><em> fa-circle-o-notch</em></li>
                                                        <li><span class="fa fa-circle-thin"></span><em> fa-circle-thin</em></li>
                                                        <li><span class="fa fa-clock-o"></span><em> fa-clock-o</em></li>
                                                        <li><span class="fa fa-cloud"></span><em> fa-cloud</em></li>
                                                        <li><span class="fa fa-cloud-download"></span><em> fa-cloud-download</em></li>
                                                        <li><span class="fa fa-cloud-upload"></span><em> fa-cloud-upload</em></li>
                                                        <li><span class="fa fa-code"></span><em> fa-code</em></li>
                                                        <li><span class="fa fa-code-fork"></span><em> fa-code-fork</em></li>
                                                        <li><span class="fa fa-coffee"></span><em> fa-coffee</em></li>
                                                        <li><span class="fa fa-cog"></span><em> fa-cog</em></li>
                                                        <li><span class="fa fa-cogs"></span><em> fa-cogs</em></li>
                                                        <li><span class="fa fa-comment"></span><em> fa-comment</em></li>
                                                        <li><span class="fa fa-comment-o"></span><em> fa-comment-o</em></li>
                                                        <li><span class="fa fa-comments"></span><em> fa-comments</em></li>
                                                        <li><span class="fa fa-comments-o"></span><em> fa-comments-o</em></li>
                                                        <li><span class="fa fa-compass"></span><em> fa-compass</em></li>
                                                        <li><span class="fa fa-credit-card"></span><em> fa-credit-card</em></li>
                                                        <li><span class="fa fa-crop"></span><em> fa-crop</em></li>
                                                        <li><span class="fa fa-crosshairs"></span><em> fa-crosshairs</em></li>
                                                        <li><span class="fa fa-cube"></span><em> fa-cube</em></li>
                                                        <li><span class="fa fa-cubes"></span><em> fa-cubes</em></li>
                                                        <li><span class="fa fa-cutlery"></span><em> fa-cutlery</em></li>
                                                        <li><span class="fa fa-dashboard"></span><em> fa-dashboard </em></li>
                                                        <li><span class="fa fa-database"></span><em> fa-database</em></li>
                                                        <li><span class="fa fa-desktop"></span><em> fa-desktop</em></li>
                                                        <li><span class="fa fa-dot-circle-o"></span><em> fa-dot-circle-o</em></li>
                                                        <li><span class="fa fa-download"></span><em> fa-download</em></li>
                                                        <li><span class="fa fa-edit"></span><em> fa-edit </em></li>
                                                        <li><span class="fa fa-ellipsis-h"></span><em> fa-ellipsis-h</em></li>
                                                        <li><span class="fa fa-ellipsis-v"></span><em> fa-ellipsis-v</em></li>
                                                        <li><span class="fa fa-envelope"></span><em> fa-envelope</em></li>
                                                        <li><span class="fa fa-envelope-o"></span><em> fa-envelope-o</em></li>
                                                        <li><span class="fa fa-envelope-square"></span><em> fa-envelope-square</em></li>
                                                        <li><span class="fa fa-eraser"></span><em> fa-eraser</em></li>
                                                        <li><span class="fa fa-exchange"></span><em> fa-exchange</em></li>
                                                        <li><span class="fa fa-exclamation"></span><em> fa-exclamation</em></li>
                                                        <li><span class="fa fa-exclamation-circle"></span><em> fa-exclamation-circle</em></li>
                                                        <li><span class="fa fa-exclamation-triangle"></span><em> fa-exclamation-triangle</em></li>
                                                        <li><span class="fa fa-external-link"></span><em> fa-external-link</em></li>
                                                        <li><span class="fa fa-external-link-square"></span><em> fa-external-link-square</em></li>
                                                        <li><span class="fa fa-eye"></span><em> fa-eye</em></li>
                                                        <li><span class="fa fa-eye-slash"></span><em> fa-eye-slash</em></li>
                                                        <li><span class="fa fa-fax"></span><em> fa-fax</em></li>
                                                        <li><span class="fa fa-female"></span><em> fa-female</em></li>
                                                        <li><span class="fa fa-fighter-jet"></span><em> fa-fighter-jet</em></li>
                                                        <li><span class="fa fa-file-archive-o"></span><em> fa-file-archive-o</em></li>
                                                        <li><span class="fa fa-file-audio-o"></span><em> fa-file-audio-o</em></li>
                                                        <li><span class="fa fa-file-code-o"></span><em> fa-file-code-o</em></li>
                                                        <li><span class="fa fa-file-excel-o"></span><em> fa-file-excel-o</em></li>
                                                        <li><span class="fa fa-file-image-o"></span><em> fa-file-image-o</em></li>
                                                        <li><span class="fa fa-file-movie-o"></span><em> fa-file-movie-o </em></li>
                                                        <li><span class="fa fa-file-pdf-o"></span><em> fa-file-pdf-o</em></li>
                                                        <li><span class="fa fa-file-photo-o"></span><em> fa-file-photo-o </em></li>
                                                        <li><span class="fa fa-file-picture-o"></span><em> fa-file-picture-o </em></li>
                                                        <li><span class="fa fa-file-powerpoint-o"></span><em> fa-file-powerpoint-o</em></li>
                                                        <li><span class="fa fa-file-sound-o"></span><em> fa-file-sound-o </em></li>
                                                        <li><span class="fa fa-file-video-o"></span><em> fa-file-video-o</em></li>
                                                        <li><span class="fa fa-file-word-o"></span><em> fa-file-word-o</em></li>
                                                        <li><span class="fa fa-file-zip-o"></span><em> fa-file-zip-o </em></li>
                                                        <li><span class="fa fa-film"></span><em> fa-film</em></li>
                                                        <li><span class="fa fa-filter"></span><em> fa-filter</em></li>
                                                        <li><span class="fa fa-fire"></span><em> fa-fire</em></li>
                                                        <li><span class="fa fa-fire-extinguisher"></span><em> fa-fire-extinguisher</em></li>
                                                        <li><span class="fa fa-flag"></span><em> fa-flag</em></li>
                                                        <li><span class="fa fa-flag-checkered"></span><em> fa-flag-checkered</em></li>
                                                        <li><span class="fa fa-flag-o"></span><em> fa-flag-o</em></li>
                                                        <li><span class="fa fa-flash"></span><em> fa-flash </em></li>
                                                        <li><span class="fa fa-flask"></span><em> fa-flask</em></li>
                                                        <li><span class="fa fa-folder"></span><em> fa-folder</em></li>
                                                        <li><span class="fa fa-folder-o"></span><em> fa-folder-o</em></li>
                                                        <li><span class="fa fa-folder-open"></span><em> fa-folder-open</em></li>
                                                        <li><span class="fa fa-folder-open-o"></span><em> fa-folder-open-o</em></li>
                                                        <li><span class="fa fa-frown-o"></span><em> fa-frown-o</em></li>
                                                        <li><span class="fa fa-gamepad"></span><em> fa-gamepad</em></li>
                                                        <li><span class="fa fa-gavel"></span><em> fa-gavel</em></li>
                                                        <li><span class="fa fa-gear"></span><em> fa-gear </em></li>
                                                        <li><span class="fa fa-gears"></span><em> fa-gears </em></li>
                                                        <li><span class="fa fa-gift"></span><em> fa-gift</em></li>
                                                        <li><span class="fa fa-glass"></span><em> fa-glass</em></li>
                                                        <li><span class="fa fa-globe"></span><em> fa-globe</em></li>
                                                        <li><span class="fa fa-graduation-cap"></span><em> fa-graduation-cap</em></li>
                                                        <li><span class="fa fa-group"></span><em> fa-group </em></li>
                                                        <li><span class="fa fa-hdd-o"></span><em> fa-hdd-o</em></li>
                                                        <li><span class="fa fa-headphones"></span><em> fa-headphones</em></li>
                                                        <li><span class="fa fa-heart"></span><em> fa-heart</em></li>
                                                        <li><span class="fa fa-heart-o"></span><em> fa-heart-o</em></li>
                                                        <li><span class="fa fa-history"></span><em> fa-history</em></li>
                                                        <li><span class="fa fa-home"></span><em> fa-home</em></li>
                                                        <li><span class="fa fa-image"></span><em> fa-image </em></li>
                                                        <li><span class="fa fa-inbox"></span><em> fa-inbox</em></li>
                                                        <li><span class="fa fa-info"></span><em> fa-info</em></li>
                                                        <li><span class="fa fa-info-circle"></span><em> fa-info-circle</em></li>
                                                        <li><span class="fa fa-institution"></span><em> fa-institution </em></li>
                                                        <li><span class="fa fa-key"></span><em> fa-key</em></li>
                                                        <li><span class="fa fa-keyboard-o"></span><em> fa-keyboard-o</em></li>
                                                        <li><span class="fa fa-language"></span><em> fa-language</em></li>
                                                        <li><span class="fa fa-laptop"></span><em> fa-laptop</em></li>
                                                        <li><span class="fa fa-leaf"></span><em> fa-leaf</em></li>
                                                        <li><span class="fa fa-legal"></span><em> fa-legal</em></li>
                                                        <li><span class="fa fa-lemon-o"></span><em> fa-lemon-o</em></li>
                                                        <li><span class="fa fa-level-down"></span><em> fa-level-down</em></li>
                                                        <li><span class="fa fa-level-up"></span><em> fa-level-up</em></li>
                                                        <li><span class="fa fa-life-bouy"></span><em> fa-life-bouy </em></li>
                                                        <li><span class="fa fa-life-ring"></span><em> fa-life-ring</em></li>
                                                        <li><span class="fa fa-life-saver"></span><em> fa-life-saver </em></li>
                                                        <li><span class="fa fa-lightbulb-o"></span><em> fa-lightbulb-o</em></li>
                                                        <li><span class="fa fa-location-arrow"></span><em> fa-location-arrow</em></li>
                                                        <li><span class="fa fa-lock"></span><em> fa-lock</em></li>
                                                        <li><span class="fa fa-magic"></span><em> fa-magic</em></li>
                                                        <li><span class="fa fa-magnet"></span><em> fa-magnet</em></li>
                                                        <li><span class="fa fa-mail-forward"></span><em> fa-mail-forward </em></li>
                                                        <li><span class="fa fa-mail-reply"></span><em> fa-mail-reply </em></li>
                                                        <li><span class="fa fa-mail-reply-all"></span><em> fa-mail-reply-all </em></li>
                                                        <li><span class="fa fa-male"></span><em> fa-male</em></li>
                                                        <li><span class="fa fa-map-marker"></span><em> fa-map-marker</em></li>
                                                        <li><span class="fa fa-meh-o"></span><em> fa-meh-o</em></li>
                                                        <li><span class="fa fa-microphone"></span><em> fa-microphone</em></li>
                                                        <li><span class="fa fa-microphone-slash"></span><em> fa-microphone-slash</em></li>
                                                        <li><span class="fa fa-minus"></span><em> fa-minus</em></li>
                                                        <li><span class="fa fa-minus-circle"></span><em> fa-minus-circle</em></li>
                                                        <li><span class="fa fa-minus-square"></span><em> fa-minus-square</em></li>
                                                        <li><span class="fa fa-minus-square-o"></span><em> fa-minus-square-o</em></li>
                                                        <li><span class="fa fa-mobile"></span><em> fa-mobile</em></li>
                                                        <li><span class="fa fa-mobile-phone"></span><em> fa-mobile-phone </em></li>
                                                        <li><span class="fa fa-money"></span><em> fa-money</em></li>
                                                        <li><span class="fa fa-moon-o"></span><em> fa-moon-o</em></li>
                                                        <li><span class="fa fa-mortar-board"></span><em> fa-mortar-board </em></li>
                                                        <li><span class="fa fa-music"></span><em> fa-music</em></li>
                                                        <li><span class="fa fa-navicon"></span><em> fa-navicon </em></li>
                                                        <li><span class="fa fa-paper-plane"></span><em> fa-paper-plane</em></li>
                                                        <li><span class="fa fa-paper-plane-o"></span><em> fa-paper-plane-o</em></li>
                                                        <li><span class="fa fa-paw"></span><em> fa-paw</em></li>
                                                        <li><span class="fa fa-pencil"></span><em> fa-pencil</em></li>
                                                        <li><span class="fa fa-pencil-square"></span><em> fa-pencil-square</em></li>
                                                        <li><span class="fa fa-pencil-square-o"></span><em> fa-pencil-square-o</em></li>
                                                        <li><span class="fa fa-phone"></span><em> fa-phone</em></li>
                                                        <li><span class="fa fa-phone-square"></span><em> fa-phone-square</em></li>
                                                        <li><span class="fa fa-photo"></span><em> fa-photo </em></li>
                                                        <li><span class="fa fa-picture-o"></span><em> fa-picture-o</em></li>
                                                        <li><span class="fa fa-plane"></span><em> fa-plane</em></li>
                                                        <li><span class="fa fa-plus"></span><em> fa-plus</em></li>
                                                        <li><span class="fa fa-plus-circle"></span><em> fa-plus-circle</em></li>
                                                        <li><span class="fa fa-plus-square"></span><em> fa-plus-square</em></li>
                                                        <li><span class="fa fa-plus-square-o"></span><em> fa-plus-square-o</em></li>
                                                        <li><span class="fa fa-power-off"></span><em> fa-power-off</em></li>
                                                        <li><span class="fa fa-print"></span><em> fa-print</em></li>
                                                        <li><span class="fa fa-puzzle-piece"></span><em> fa-puzzle-piece</em></li>
                                                        <li><span class="fa fa-qrcode"></span><em> fa-qrcode</em></li>
                                                        <li><span class="fa fa-question"></span><em> fa-question</em></li>
                                                        <li><span class="fa fa-question-circle"></span><em> fa-question-circle</em></li>
                                                        <li><span class="fa fa-quote-left"></span><em> fa-quote-left</em></li>
                                                        <li><span class="fa fa-quote-right"></span><em> fa-quote-right</em></li>
                                                        <li><span class="fa fa-random"></span><em> fa-random</em></li>
                                                        <li><span class="fa fa-recycle"></span><em> fa-recycle</em></li>
                                                        <li><span class="fa fa-refresh"></span><em> fa-refresh</em></li>
                                                        <li><span class="fa fa-reorder"></span><em> fa-reorder </em></li>
                                                        <li><span class="fa fa-reply"></span><em> fa-reply</em></li>
                                                        <li><span class="fa fa-reply-all"></span><em> fa-reply-all</em></li>
                                                        <li><span class="fa fa-retweet"></span><em> fa-retweet</em></li>
                                                        <li><span class="fa fa-road"></span><em> fa-road</em></li>
                                                        <li><span class="fa fa-rocket"></span><em> fa-rocket</em></li>
                                                        <li><span class="fa fa-rss"></span><em> fa-rss</em></li>
                                                        <li><span class="fa fa-rss-square"></span><em> fa-rss-square</em></li>
                                                        <li><span class="fa fa-search"></span><em> fa-search</em></li>
                                                        <li><span class="fa fa-search-minus"></span><em> fa-search-minus</em></li>
                                                        <li><span class="fa fa-search-plus"></span><em> fa-search-plus</em></li>
                                                        <li><span class="fa fa-send"></span><em> fa-send </em></li>
                                                        <li><span class="fa fa-send-o"></span><em> fa-send-o </em></li>
                                                        <li><span class="fa fa-share"></span><em> fa-share</em></li>
                                                        <li><span class="fa fa-share-alt"></span><em> fa-share-alt</em></li>
                                                        <li><span class="fa fa-share-alt-square"></span><em> fa-share-alt-square</em></li>
                                                        <li><span class="fa fa-share-square"></span><em> fa-share-square</em></li>
                                                        <li><span class="fa fa-share-square-o"></span><em> fa-share-square-o</em></li>
                                                        <li><span class="fa fa-shield"></span><em> fa-shield</em></li>
                                                        <li><span class="fa fa-shopping-cart"></span><em> fa-shopping-cart</em></li>
                                                        <li><span class="fa fa-sign-in"></span><em> fa-sign-in</em></li>
                                                        <li><span class="fa fa-sign-out"></span><em> fa-sign-out</em></li>
                                                        <li><span class="fa fa-signal"></span><em> fa-signal</em></li>
                                                        <li><span class="fa fa-sitemap"></span><em> fa-sitemap</em></li>
                                                        <li><span class="fa fa-sliders"></span><em> fa-sliders</em></li>
                                                        <li><span class="fa fa-smile-o"></span><em> fa-smile-o</em></li>
                                                        <li><span class="fa fa-sort"></span><em> fa-sort</em></li>
                                                        <li><span class="fa fa-sort-alpha-asc"></span><em> fa-sort-alpha-asc</em></li>
                                                        <li><span class="fa fa-sort-alpha-desc"></span><em> fa-sort-alpha-desc</em></li>
                                                        <li><span class="fa fa-sort-amount-asc"></span><em> fa-sort-amount-asc</em></li>
                                                        <li><span class="fa fa-sort-amount-desc"></span><em> fa-sort-amount-desc</em></li>
                                                        <li><span class="fa fa-sort-asc"></span><em> fa-sort-asc</em></li>
                                                        <li><span class="fa fa-sort-desc"></span><em> fa-sort-desc</em></li>
                                                        <li><span class="fa fa-sort-down"></span><em> fa-sort-down </em></li>
                                                        <li><span class="fa fa-sort-numeric-asc"></span><em> fa-sort-numeric-asc</em></li>
                                                        <li><span class="fa fa-sort-numeric-desc"></span><em> fa-sort-numeric-desc</em></li>
                                                        <li><span class="fa fa-sort-up"></span><em> fa-sort-up </em></li>
                                                        <li><span class="fa fa-space-shuttle"></span><em> fa-space-shuttle</em></li>
                                                        <li><span class="fa fa-spinner"></span><em> fa-spinner</em></li>
                                                        <li><span class="fa fa-spoon"></span><em> fa-spoon</em></li>
                                                        <li><span class="fa fa-square"></span><em> fa-square</em></li>
                                                        <li><span class="fa fa-square-o"></span><em> fa-square-o</em></li>
                                                        <li><span class="fa fa-star"></span><em> fa-star</em></li>
                                                        <li><span class="fa fa-star-half"></span><em> fa-star-half</em></li>
                                                        <li><span class="fa fa-star-half-empty"></span><em> fa-star-half-empty </em></li>
                                                        <li><span class="fa fa-star-half-full"></span><em> fa-star-half-full </em></li>
                                                        <li><span class="fa fa-star-half-o"></span><em> fa-star-half-o</em></li>
                                                        <li><span class="fa fa-star-o"></span><em> fa-star-o</em></li>
                                                        <li><span class="fa fa-suitcase"></span><em> fa-suitcase</em></li>
                                                        <li><span class="fa fa-sun-o"></span><em> fa-sun-o</em></li>
                                                        <li><span class="fa fa-support"></span><em> fa-support </em></li>
                                                        <li><span class="fa fa-tablet"></span><em> fa-tablet</em></li>
                                                        <li><span class="fa fa-tachometer"></span><em> fa-tachometer</em></li>
                                                        <li><span class="fa fa-tag"></span><em> fa-tag</em></li>
                                                        <li><span class="fa fa-tags"></span><em> fa-tags</em></li>
                                                        <li><span class="fa fa-tasks"></span><em> fa-tasks</em></li>
                                                        <li><span class="fa fa-taxi"></span><em> fa-taxi</em></li>
                                                        <li><span class="fa fa-terminal"></span><em> fa-terminal</em></li>
                                                        <li><span class="fa fa-thumb-tack"></span><em> fa-thumb-tack</em></li>
                                                        <li><span class="fa fa-thumbs-down"></span><em> fa-thumbs-down</em></li>
                                                        <li><span class="fa fa-thumbs-o-down"></span><em> fa-thumbs-o-down</em></li>
                                                        <li><span class="fa fa-thumbs-o-up"></span><em> fa-thumbs-o-up</em></li>
                                                        <li><span class="fa fa-thumbs-up"></span><em> fa-thumbs-up</em></li>
                                                        <li><span class="fa fa-ticket"></span><em> fa-ticket</em></li>
                                                        <li><span class="fa fa-times"></span><em> fa-times</em></li>
                                                        <li><span class="fa fa-times-circle"></span><em> fa-times-circle</em></li>
                                                        <li><span class="fa fa-times-circle-o"></span><em> fa-times-circle-o</em></li>
                                                        <li><span class="fa fa-tint"></span><em> fa-tint</em></li>
                                                        <li><span class="fa fa-trash-o"></span><em> fa-trash-o</em></li>
                                                        <li><span class="fa fa-tree"></span><em> fa-tree</em></li>
                                                        <li><span class="fa fa-trophy"></span><em> fa-trophy</em></li>
                                                        <li><span class="fa fa-truck"></span><em> fa-truck</em></li>
                                                        <li><span class="fa fa-umbrella"></span><em> fa-umbrella</em></li>
                                                        <li><span class="fa fa-university"></span><em> fa-university</em></li>
                                                        <li><span class="fa fa-unlock"></span><em> fa-unlock</em></li>
                                                        <li><span class="fa fa-unlock-alt"></span><em> fa-unlock-alt</em></li>
                                                        <li><span class="fa fa-unsorted"></span><em> fa-unsorted </em></li>
                                                        <li><span class="fa fa-upload"></span><em> fa-upload</em></li>
                                                        <li><span class="fa fa-user"></span><em> fa-user</em></li>
                                                        <li><span class="fa fa-users"></span><em> fa-users</em></li>
                                                        <li><span class="fa fa-video-camera"></span><em> fa-video-camera</em></li>
                                                        <li><span class="fa fa-volume-down"></span><em> fa-volume-down</em></li>
                                                        <li><span class="fa fa-volume-off"></span><em> fa-volume-off</em></li>
                                                        <li><span class="fa fa-volume-up"></span><em> fa-volume-up</em></li>
                                                        <li><span class="fa fa-warning"></span><em> fa-warning </em></li>
                                                        <li><span class="fa fa-wheelchair"></span><em> fa-wheelchair</em></li>
                                                        <li><span class="fa fa-wrench"></span><em> fa-wrench</em></li>
                                                        <li><span class="fa fa-spin fa-circle-o-notch"></span><em> fa-circle-o-notch</em></li>
                                                        <li><span class="fa fa-spin fa-cog"></span><em> fa-cog</em></li>
                                                        <li><span class="fa fa-spin fa-gear"></span><em> fa-gear </em></li>
                                                        <li><span class="fa fa-spin fa-refresh"></span><em> fa-refresh</em></li>
                                                        <li><span class="fa fa-spin fa-spinner"></span><em> fa-spinner</em></li>
                                                        <li><span class="fa fa-check-square"></span><em> fa-check-square</em></li>
                                                        <li><span class="fa fa-check-square-o"></span><em> fa-check-square-o</em></li>
                                                        <li><span class="fa fa-circle"></span><em> fa-circle</em></li>
                                                        <li><span class="fa fa-circle-o"></span><em> fa-circle-o</em></li>
                                                        <li><span class="fa fa-dot-circle-o"></span><em> fa-dot-circle-o</em></li>
                                                        <li><span class="fa fa-minus-square"></span><em> fa-minus-square</em></li>
                                                        <li><span class="fa fa-minus-square-o"></span><em> fa-minus-square-o</em></li>
                                                        <li><span class="fa fa-plus-square"></span><em> fa-plus-square</em></li>
                                                        <li><span class="fa fa-plus-square-o"></span><em> fa-plus-square-o</em></li>
                                                        <li><span class="fa fa-square"></span><em> fa-square</em></li>
                                                        <li><span class="fa fa-square-o"></span><em> fa-square-o</em></li>
                                                        <li><span class="fa fa-align-center"></span><em> fa-align-center</em></li>
                                                        <li><span class="fa fa-align-justify"></span><em> fa-align-justify</em></li>
                                                        <li><span class="fa fa-align-left"></span><em> fa-align-left</em></li>
                                                        <li><span class="fa fa-align-right"></span><em> fa-align-right</em></li>
                                                        <li><span class="fa fa-bold"></span><em> fa-bold</em></li>
                                                        <li><span class="fa fa-chain"></span><em> fa-chain </em></li>
                                                        <li><span class="fa fa-chain-broken"></span><em> fa-chain-broken</em></li>
                                                        <li><span class="fa fa-clipboard"></span><em> fa-clipboard</em></li>
                                                        <li><span class="fa fa-columns"></span><em> fa-columns</em></li>
                                                        <li><span class="fa fa-copy"></span><em> fa-copy </em></li>
                                                        <li><span class="fa fa-cut"></span><em> fa-cut </em></li>
                                                        <li><span class="fa fa-dedent"></span><em> fa-dedent </em></li>
                                                        <li><span class="fa fa-eraser"></span><em> fa-eraser</em></li>
                                                        <li><span class="fa fa-file"></span><em> fa-file</em></li>
                                                        <li><span class="fa fa-file-o"></span><em> fa-file-o</em></li>
                                                        <li><span class="fa fa-file-text"></span><em> fa-file-text</em></li>
                                                        <li><span class="fa fa-file-text-o"></span><em> fa-file-text-o</em></li>
                                                        <li><span class="fa fa-files-o"></span><em> fa-files-o</em></li>
                                                        <li><span class="fa fa-floppy-o"></span><em> fa-floppy-o</em></li>
                                                        <li><span class="fa fa-font"></span><em> fa-font</em></li>
                                                        <li><span class="fa fa-header"></span><em> fa-header</em></li>
                                                        <li><span class="fa fa-indent"></span><em> fa-indent</em></li>
                                                        <li><span class="fa fa-italic"></span><em> fa-italic</em></li>
                                                        <li><span class="fa fa-link"></span><em> fa-link</em></li>
                                                        <li><span class="fa fa-list"></span><em> fa-list</em></li>
                                                        <li><span class="fa fa-list-alt"></span><em> fa-list-alt</em></li>
                                                        <li><span class="fa fa-list-ol"></span><em> fa-list-ol</em></li>
                                                        <li><span class="fa fa-list-ul"></span><em> fa-list-ul</em></li>
                                                        <li><span class="fa fa-outdent"></span><em> fa-outdent</em></li>
                                                        <li><span class="fa fa-paperclip"></span><em> fa-paperclip</em></li>
                                                        <li><span class="fa fa-paragraph"></span><em> fa-paragraph</em></li>
                                                        <li><span class="fa fa-paste"></span><em> fa-paste </em></li>
                                                        <li><span class="fa fa-repeat"></span><em> fa-repeat</em></li>
                                                        <li><span class="fa fa-save"></span><em> fa-save </em></li>
                                                        <li><span class="fa fa-scissors"></span><em> fa-scissors</em></li>
                                                        <li><span class="fa fa-strikethrough"></span><em> fa-strikethrough</em></li>
                                                        <li><span class="fa fa-subscript"></span><em> fa-subscript</em></li>
                                                        <li><span class="fa fa-superscript"></span><em> fa-superscript</em></li>
                                                        <li><span class="fa fa-table"></span><em> fa-table</em></li>
                                                        <li><span class="fa fa-text-height"></span><em> fa-text-height</em></li>
                                                        <li><span class="fa fa-text-width"></span><em> fa-text-width</em></li>
                                                        <li><span class="fa fa-th"></span><em> fa-th</em></li>
                                                        <li><span class="fa fa-th-large"></span><em> fa-th-large</em></li>
                                                        <li><span class="fa fa-th-list"></span><em> fa-th-list</em></li>
                                                        <li><span class="fa fa-underline"></span><em> fa-underline</em></li>
                                                        <li><span class="fa fa-undo"></span><em> fa-undo</em></li>
                                                        <li><span class="fa fa-unlink"></span><em> fa-unlink </em></li>
                                                        <li><span class="fa fa-angle-double-down"></span><em> fa-angle-double-down</em></li>
                                                        <li><span class="fa fa-angle-double-left"></span><em> fa-angle-double-left</em></li>
                                                        <li><span class="fa fa-angle-double-right"></span><em> fa-angle-double-right</em></li>
                                                        <li><span class="fa fa-angle-double-up"></span><em> fa-angle-double-up</em></li>
                                                        <li><span class="fa fa-angle-down"></span><em> fa-angle-down</em></li>
                                                        <li><span class="fa fa-angle-left"></span><em> fa-angle-left</em></li>
                                                        <li><span class="fa fa-angle-right"></span><em> fa-angle-right</em></li>
                                                        <li><span class="fa fa-angle-up"></span><em> fa-angle-up</em></li>
                                                        <li><span class="fa fa-arrow-circle-down"></span><em> fa-arrow-circle-down</em></li>
                                                        <li><span class="fa fa-arrow-circle-left"></span><em> fa-arrow-circle-left</em></li>
                                                        <li><span class="fa fa-arrow-circle-o-down"></span><em> fa-arrow-circle-o-down</em></li>
                                                        <li><span class="fa fa-arrow-circle-o-left"></span><em> fa-arrow-circle-o-left</em></li>
                                                        <li><span class="fa fa-arrow-circle-o-right"></span><em> fa-arrow-circle-o-right</em></li>
                                                        <li><span class="fa fa-arrow-circle-o-up"></span><em> fa-arrow-circle-o-up</em></li>
                                                        <li><span class="fa fa-arrow-circle-right"></span><em> fa-arrow-circle-right</em></li>
                                                        <li><span class="fa fa-arrow-circle-up"></span><em> fa-arrow-circle-up</em></li>
                                                        <li><span class="fa fa-arrow-down"></span><em> fa-arrow-down</em></li>
                                                        <li><span class="fa fa-arrow-left"></span><em> fa-arrow-left</em></li>
                                                        <li><span class="fa fa-arrow-right"></span><em> fa-arrow-right</em></li>
                                                        <li><span class="fa fa-arrow-up"></span><em> fa-arrow-up</em></li>
                                                        <li><span class="fa fa-arrows"></span><em> fa-arrows</em></li>
                                                        <li><span class="fa fa-arrows-alt"></span><em> fa-arrows-alt</em></li>
                                                        <li><span class="fa fa-arrows-h"></span><em> fa-arrows-h</em></li>
                                                        <li><span class="fa fa-arrows-v"></span><em> fa-arrows-v</em></li>
                                                        <li><span class="fa fa-caret-down"></span><em> fa-caret-down</em></li>
                                                        <li><span class="fa fa-caret-left"></span><em> fa-caret-left</em></li>
                                                        <li><span class="fa fa-caret-right"></span><em> fa-caret-right</em></li>
                                                        <li><span class="fa fa-caret-up"></span><em> fa-caret-up</em></li>
                                                        <li><span class="fa fa-caret-square-o-left"></span><em> fa-caret-square-o-left</em></li>
                                                        <li><span class="fa fa-caret-square-o-right"></span><em> fa-caret-square-o-right</em></li>
                                                        <li><span class="fa fa-caret-square-o-up"></span><em> fa-caret-square-o-up</em></li>
                                                        <li><span class="fa fa-caret-square-o-down"></span><em> fa-caret-square-o-down</em></li>
                                                        <li><span class="fa fa-chevron-circle-down"></span><em> fa-chevron-circle-down</em></li>
                                                        <li><span class="fa fa-chevron-circle-left"></span><em> fa-chevron-circle-left</em></li>
                                                        <li><span class="fa fa-chevron-circle-right"></span><em> fa-chevron-circle-right</em></li>
                                                        <li><span class="fa fa-chevron-circle-up"></span><em> fa-chevron-circle-up</em></li>
                                                        <li><span class="fa fa-chevron-down"></span><em> fa-chevron-down</em></li>
                                                        <li><span class="fa fa-chevron-left"></span><em> fa-chevron-left</em></li>
                                                        <li><span class="fa fa-chevron-right"></span><em> fa-chevron-right</em></li>
                                                        <li><span class="fa fa-chevron-up"></span><em> fa-chevron-up</em></li>
                                                        <li><span class="fa fa-hand-o-down"></span><em> fa-hand-o-down</em></li>
                                                        <li><span class="fa fa-hand-o-left"></span><em> fa-hand-o-left</em></li>
                                                        <li><span class="fa fa-hand-o-right"></span><em> fa-hand-o-right</em></li>
                                                        <li><span class="fa fa-hand-o-up"></span><em> fa-hand-o-up</em></li>
                                                        <li><span class="fa fa-long-arrow-down"></span><em> fa-long-arrow-down</em></li>
                                                        <li><span class="fa fa-long-arrow-left"></span><em> fa-long-arrow-left</em></li>
                                                        <li><span class="fa fa-long-arrow-right"></span><em> fa-long-arrow-right</em></li>
                                                        <li><span class="fa fa-long-arrow-up"></span><em> fa-long-arrow-up</em></li>
                                                        <li><span class="fa fa-arrows-alt"></span><em> fa-arrows-alt</em></li>
                                                        <li><span class="fa fa-backward"></span><em> fa-backward</em></li>
                                                        <li><span class="fa fa-compress"></span><em> fa-compress</em></li>
                                                        <li><span class="fa fa-eject"></span><em> fa-eject</em></li>
                                                        <li><span class="fa fa-expand"></span><em> fa-expand</em></li>
                                                        <li><span class="fa fa-fast-backward"></span><em> fa-fast-backward</em></li>
                                                        <li><span class="fa fa-fast-forward"></span><em> fa-fast-forward</em></li>
                                                        <li><span class="fa fa-forward"></span><em> fa-forward</em></li>
                                                        <li><span class="fa fa-pause"></span><em> fa-pause</em></li>
                                                        <li><span class="fa fa-play"></span><em> fa-play</em></li>
                                                        <li><span class="fa fa-play-circle"></span><em> fa-play-circle</em></li>
                                                        <li><span class="fa fa-play-circle-o"></span><em> fa-play-circle-o</em></li>
                                                        <li><span class="fa fa-step-backward"></span><em> fa-step-backward</em></li>
                                                        <li><span class="fa fa-step-forward"></span><em> fa-step-forward</em></li>
                                                        <li><span class="fa fa-stop"></span><em> fa-stop</em></li>
                                                        <li><span class="fa fa-youtube-play"></span><em> fa-youtube-play</em></li>
                                                        <li><span class="fa fa-adn"></span><em> fa-adn</em></li>
                                                        <li><span class="fa fa-android"></span><em> fa-android</em></li>
                                                        <li><span class="fa fa-apple"></span><em> fa-apple</em></li>
                                                        <li><span class="fa fa-behance"></span><em> fa-behance</em></li>
                                                        <li><span class="fa fa-behance-square"></span><em> fa-behance-square</em></li>
                                                        <li><span class="fa fa-bitbucket"></span><em> fa-bitbucket</em></li>
                                                        <li><span class="fa fa-bitbucket-square"></span><em> fa-bitbucket-square</em></li>
                                                        <li><span class="fa fa-bitcoin"></span><em> fa-bitcoin </em></li>
                                                        <li><span class="fa fa-btc"></span><em> fa-btc</em></li>
                                                        <li><span class="fa fa-codepen"></span><em> fa-codepen</em></li>
                                                        <li><span class="fa fa-css3"></span><em> fa-css3</em></li>
                                                        <li><span class="fa fa-delicious"></span><em> fa-delicious</em></li>
                                                        <li><span class="fa fa-deviantart"></span><em> fa-deviantart</em></li>
                                                        <li><span class="fa fa-digg"></span><em> fa-digg</em></li>
                                                        <li><span class="fa fa-dribbble"></span><em> fa-dribbble</em></li>
                                                        <li><span class="fa fa-dropbox"></span><em> fa-dropbox</em></li>
                                                        <li><span class="fa fa-drupal"></span><em> fa-drupal</em></li>
                                                        <li><span class="fa fa-empire"></span><em> fa-empire</em></li>
                                                        <li><span class="fa fa-facebook"></span><em> fa-facebook</em></li>
                                                        <li><span class="fa fa-facebook-square"></span><em> fa-facebook-square</em></li>
                                                        <li><span class="fa fa-flickr"></span><em> fa-flickr</em></li>
                                                        <li><span class="fa fa-foursquare"></span><em> fa-foursquare</em></li>
                                                        <li><span class="fa fa-ge"></span><em> fa-ge </em></li>
                                                        <li><span class="fa fa-git"></span><em> fa-git</em></li>
                                                        <li><span class="fa fa-git-square"></span><em> fa-git-square</em></li>
                                                        <li><span class="fa fa-github"></span><em> fa-github</em></li>
                                                        <li><span class="fa fa-github-alt"></span><em> fa-github-alt</em></li>
                                                        <li><span class="fa fa-github-square"></span><em> fa-github-square</em></li>
                                                        <li><span class="fa fa-gittip"></span><em> fa-gittip</em></li>
                                                        <li><span class="fa fa-google"></span><em> fa-google</em></li>
                                                        <li><span class="fa fa-google-plus"></span><em> fa-google-plus</em></li>
                                                        <li><span class="fa fa-google-plus-square"></span><em> fa-google-plus-square</em></li>
                                                        <li><span class="fa fa-hacker-news"></span><em> fa-hacker-news</em></li>
                                                        <li><span class="fa fa-html5"></span><em> fa-html5</em></li>
                                                        <li><span class="fa fa-instagram"></span><em> fa-instagram</em></li>
                                                        <li><span class="fa fa-joomla"></span><em> fa-joomla</em></li>
                                                        <li><span class="fa fa-jsfiddle"></span><em> fa-jsfiddle</em></li>
                                                        <li><span class="fa fa-linkedin"></span><em> fa-linkedin</em></li>
                                                        <li><span class="fa fa-linkedin-square"></span><em> fa-linkedin-square</em></li>
                                                        <li><span class="fa fa-linux"></span><em> fa-linux</em></li>
                                                        <li><span class="fa fa-maxcdn"></span><em> fa-maxcdn</em></li>
                                                        <li><span class="fa fa-openid"></span><em> fa-openid</em></li>
                                                        <li><span class="fa fa-pagelines"></span><em> fa-pagelines</em></li>
                                                        <li><span class="fa fa-pied-piper"></span><em> fa-pied-piper</em></li>
                                                        <li><span class="fa fa-pied-piper-alt"></span><em> fa-pied-piper-alt</em></li>
                                                        <li><span class="fa fa-pinterest"></span><em> fa-pinterest</em></li>
                                                        <li><span class="fa fa-pinterest-square"></span><em> fa-pinterest-square</em></li>
                                                        <li><span class="fa fa-qq"></span><em> fa-qq</em></li>
                                                        <li><span class="fa fa-ra"></span><em> fa-ra </em></li>
                                                        <li><span class="fa fa-rebel"></span><em> fa-rebel</em></li>
                                                        <li><span class="fa fa-reddit"></span><em> fa-reddit</em></li>
                                                        <li><span class="fa fa-reddit-square"></span><em> fa-reddit-square</em></li>
                                                        <li><span class="fa fa-renren"></span><em> fa-renren</em></li>
                                                        <li><span class="fa fa-share-alt"></span><em> fa-share-alt</em></li>
                                                        <li><span class="fa fa-share-alt-square"></span><em> fa-share-alt-square</em></li>
                                                        <li><span class="fa fa-skype"></span><em> fa-skype</em></li>
                                                        <li><span class="fa fa-slack"></span><em> fa-slack</em></li>
                                                        <li><span class="fa fa-soundcloud"></span><em> fa-soundcloud</em></li>
                                                        <li><span class="fa fa-spotify"></span><em> fa-spotify</em></li>
                                                        <li><span class="fa fa-stack-exchange"></span><em> fa-stack-exchange</em></li>
                                                        <li><span class="fa fa-stack-overflow"></span><em> fa-stack-overflow</em></li>
                                                        <li><span class="fa fa-steam"></span><em> fa-steam</em></li>
                                                        <li><span class="fa fa-steam-square"></span><em> fa-steam-square</em></li>
                                                        <li><span class="fa fa-stumbleupon"></span><em> fa-stumbleupon</em></li>
                                                        <li><span class="fa fa-stumbleupon-circle"></span><em> fa-stumbleupon-circle</em></li>
                                                        <li><span class="fa fa-tencent-weibo"></span><em> fa-tencent-weibo</em></li>
                                                        <li><span class="fa fa-trello"></span><em> fa-trello</em></li>
                                                        <li><span class="fa fa-tumblr"></span><em> fa-tumblr</em></li>
                                                        <li><span class="fa fa-tumblr-square"></span><em> fa-tumblr-square</em></li>
                                                        <li><span class="fa fa-twitter"></span><em> fa-twitter</em></li>
                                                        <li><span class="fa fa-twitter-square"></span><em> fa-twitter-square</em></li>
                                                        <li><span class="fa fa-vimeo-square"></span><em> fa-vimeo-square</em></li>
                                                        <li><span class="fa fa-vine"></span><em> fa-vine</em></li>
                                                        <li><span class="fa fa-vk"></span><em> fa-vk</em></li>
                                                        <li><span class="fa fa-wechat"></span><em> fa-wechat </em></li>
                                                        <li><span class="fa fa-weibo"></span><em> fa-weibo</em></li>
                                                        <li><span class="fa fa-weixin"></span><em> fa-weixin</em></li>
                                                        <li><span class="fa fa-windows"></span><em> fa-windows</em></li>
                                                        <li><span class="fa fa-wordpress"></span><em> fa-wordpress</em></li>
                                                        <li><span class="fa fa-xing"></span><em> fa-xing</em></li>
                                                        <li><span class="fa fa-xing-square"></span><em> fa-xing-square</em></li>
                                                        <li><span class="fa fa-yahoo"></span><em> fa-yahoo</em></li>
                                                        <li><span class="fa fa-youtube"></span><em> fa-youtube</em></li>
                                                        <li><span class="fa fa-youtube-play"></span><em> fa-youtube-play</em></li>
                                                        <li><span class="fa fa-youtube-square"></span><em> fa-youtube-square</em></li>
                                                        <li><span class="fa fa-ambulance"></span><em> fa-ambulance</em></li>
                                                        <li><span class="fa fa-h-square"></span><em> fa-h-square</em></li>
                                                        <li><span class="fa fa-hospital-o"></span><em> fa-hospital-o</em></li>
                                                        <li><span class="fa fa-medkit"></span><em> fa-medkit</em></li>
                                                        <li><span class="fa fa-plus-square"></span><em> fa-plus-square</em></li>
                                                        <li><span class="fa fa-stethoscope"></span><em> fa-stethoscope</em></li>
                                                        <li><span class="fa fa-user-md"></span><em> fa-user-md</em></li>
                                                        <li><span class="fa fa-wheelchair"></span><em> fa-wheelchair</em></li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane fade" id="pills-icoicon" role="tabpanel" aria-labelledby="icoicon-tab">
                                                    <ul class="the-icons clearfix">
                                                        <li><span class="icofont icofont-angry-monster"></span><em>angry-monster</em></li>
                                                        <li><span class="icofont icofont-bathtub"></span><em>bathtub</em></li>
                                                        <li><span class="icofont icofont-bird-wings"></span><em>bird-wings</em></li>
                                                        <li><span class="icofont icofont-bow"></span><em>bow</em></li>
                                                        <li><span class="icofont icofont-brain-alt"></span><em>brain-alt</em></li>
                                                        <li><span class="icofont icofont-butterfly-alt"></span><em>butterfly-alt</em></li>
                                                        <li><span class="icofont icofont-castle"></span><em>castle</em></li>
                                                        <li><span class="icofont icofont-circuit"></span><em>circuit</em></li>
                                                        <li><span class="icofont icofont-dart"></span><em>dart</em></li>
                                                        <li><span class="icofont icofont-dice-alt"></span><em>dice-alt</em></li>
                                                        <li><span class="icofont icofont-disability-race"></span><em>disability-race</em></li>
                                                        <li><span class="icofont icofont-diving-goggle"></span><em>diving-goggle</em></li>
                                                        <li><span class="icofont icofont-fire-alt"></span><em>fire-alt</em></li>
                                                        <li><span class="icofont icofont-flame-torch"></span><em>flame-torch</em></li>
                                                        <li><span class="icofont icofont-flora"></span><em>flora</em></li>
                                                        <li><span class="icofont icofont-flora-flower"></span><em>flora-flower</em></li>
                                                        <li><span class="icofont icofont-gift-box"></span><em>gift-box</em></li>
                                                        <li><span class="icofont icofont-halloween-pumpkin"></span><em>halloween-pumpkin</em></li>
                                                        <li><span class="icofont icofont-hand-power"></span><em>hand-power</em></li>
                                                        <li><span class="icofont icofont-hand-thunder"></span><em>hand-thunder</em></li>
                                                        <li><span class="icofont icofont-king-crown"></span><em>king-crown</em></li>
                                                        <li><span class="icofont icofont-king-monster"></span><em>king-monster</em></li>
                                                        <li><span class="icofont icofont-love"></span><em>love</em></li>
                                                        <li><span class="icofont icofont-magician-hat"></span><em>magician-hat</em></li>
                                                        <li><span class="icofont icofont-native-american"></span><em>native-american</em></li>
                                                        <li><span class="icofont icofont-open-eye"></span><em>open-eye</em></li>
                                                        <li><span class="icofont icofont-owl-look"></span><em>owl-look</em></li>
                                                        <li><span class="icofont icofont-phoenix"></span><em>phoenix</em></li>
                                                        <li><span class="icofont icofont-queen-crown"></span><em>queen-crown</em></li>
                                                        <li><span class="icofont icofont-robot-face"></span><em>robot-face</em></li>
                                                        <li><span class="icofont icofont-sand-clock"></span><em>sand-clock</em></li>
                                                        <li><span class="icofont icofont-shield-alt"></span><em>shield-alt</em></li>
                                                        <li><span class="icofont icofont-ship-wheel"></span><em>ship-wheel</em></li>
                                                        <li><span class="icofont icofont-skull-danger"></span><em>skull-danger</em></li>
                                                        <li><span class="icofont icofont-skull-face"></span><em>skull-face</em></li>
                                                        <li><span class="icofont icofont-snail"></span><em>snail</em></li>
                                                        <li><span class="icofont icofont-snow-alt"></span><em>snow-alt</em></li>
                                                        <li><span class="icofont icofont-snow-flake"></span><em>snow-flake</em></li>
                                                        <li><span class="icofont icofont-snowmobile"></span><em>snowmobile</em></li>
                                                        <li><span class="icofont icofont-space-shuttle"></span><em>space-shuttle</em></li>
                                                        <li><span class="icofont icofont-star-shape"></span><em>star-shape</em></li>
                                                        <li><span class="icofont icofont-swirl"></span><em>swirl</em></li>
                                                        <li><span class="icofont icofont-tattoo-wing"></span><em>tattoo-wing</em></li>
                                                        <li><span class="icofont icofont-throne"></span><em>throne</em></li>
                                                        <li><span class="icofont icofont-touch"></span><em>touch</em></li>
                                                        <li><span class="icofont icofont-tree-alt"></span><em>tree-alt</em></li>
                                                        <li><span class="icofont icofont-triangle"></span><em>triangle</em></li>
                                                        <li><span class="icofont icofont-unity-hand"></span><em>unity-hand</em></li>
                                                        <li><span class="icofont icofont-weed"></span><em>weed</em></li>
                                                        <li><span class="icofont icofont-woman-bird"></span><em>woman-bird</em></li>
                                                        <li><span class="icofont icofont-animal-bat"></span><em>animal-bat</em></li>
                                                        <li><span class="icofont icofont-animal-bear"></span><em>animal-bear</em></li>
                                                        <li><span class="icofont icofont-animal-bear-tracks"></span><em>animal-bear-tracks</em></li>
                                                        <li><span class="icofont icofont-animal-bird"></span><em>animal-bird</em></li>
                                                        <li><span class="icofont icofont-animal-bird-alt"></span><em>animal-bird-alt</em></li>
                                                        <li><span class="icofont icofont-animal-bone"></span><em>animal-bone</em></li>
                                                        <li><span class="icofont icofont-animal-bull"></span><em>animal-bull</em></li>
                                                        <li><span class="icofont icofont-animal-camel"></span><em>animal-camel</em></li>
                                                        <li><span class="icofont icofont-animal-camel-alt"></span><em>animal-camel-alt</em></li>
                                                        <li><span class="icofont icofont-animal-camel-head"></span><em>animal-camel-head</em></li>
                                                        <li><span class="icofont icofont-animal-cat"></span><em>animal-cat</em></li>
                                                        <li><span class="icofont icofont-animal-cat-alt-1"></span><em>animal-cat-alt-1</em></li>
                                                        <li><span class="icofont icofont-animal-cat-alt-2"></span><em>animal-cat-alt-2</em></li>
                                                        <li><span class="icofont icofont-animal-cat-alt-3"></span><em>animal-cat-alt-3</em></li>
                                                        <li><span class="icofont icofont-animal-cat-alt-4"></span><em>animal-cat-alt-4</em></li>
                                                        <li><span class="icofont icofont-animal-cat-with-dog"></span><em>animal-cat-with-dog</em></li>
                                                        <li><span class="icofont icofont-animal-cow"></span><em>animal-cow</em></li>
                                                        <li><span class="icofont icofont-animal-cow-head"></span><em>animal-cow-head</em></li>
                                                        <li><span class="icofont icofont-animal-crab"></span><em>animal-crab</em></li>
                                                        <li><span class="icofont icofont-animal-crocodile"></span><em>animal-crocodile</em></li>
                                                        <li><span class="icofont icofont-animal-deer-head"></span><em>animal-deer-head</em></li>
                                                        <li><span class="icofont icofont-animal-dog"></span><em>animal-dog</em></li>
                                                        <li><span class="icofont icofont-animal-dog-alt"></span><em>animal-dog-alt</em></li>
                                                        <li><span class="icofont icofont-animal-dog-barking"></span><em>animal-dog-barking</em></li>
                                                        <li><span class="icofont icofont-animal-dolphin"></span><em>animal-dolphin</em></li>
                                                        <li><span class="icofont icofont-animal-duck-tracks"></span><em>animal-duck-tracks</em></li>
                                                        <li><span class="icofont icofont-animal-eagle-head"></span><em>animal-eagle-head</em></li>
                                                        <li><span class="icofont icofont-animal-eaten-fish"></span><em>animal-eaten-fish</em></li>
                                                        <li><span class="icofont icofont-animal-elephant"></span><em>animal-elephant</em></li>
                                                        <li><span class="icofont icofont-animal-elephant-alt"></span><em>animal-elephant-alt</em></li>
                                                        <li><span class="icofont icofont-animal-elephant-head"></span><em>animal-elephant-head</em></li>
                                                        <li><span class="icofont icofont-animal-elephant-head-alt"></span><em>animal-elephant-head-alt</em></li>
                                                        <li><span class="icofont icofont-animal-elk"></span><em>animal-elk</em></li>
                                                        <li><span class="icofont icofont-animal-fish"></span><em>animal-fish</em></li>
                                                        <li><span class="icofont icofont-animal-fish-alt-1"></span><em>animal-fish-alt-1</em></li>
                                                        <li><span class="icofont icofont-animal-fish-alt-2"></span><em>animal-fish-alt-2</em></li>
                                                        <li><span class="icofont icofont-animal-fish-alt-3"></span><em>animal-fish-alt-3</em></li>
                                                        <li><span class="icofont icofont-animal-fish-alt-4"></span><em>animal-fish-alt-4</em></li>
                                                        <li><span class="icofont icofont-animal-fox"></span><em>animal-fox</em></li>
                                                        <li><span class="icofont icofont-animal-fox-alt"></span><em>animal-fox-alt</em></li>
                                                        <li><span class="icofont icofont-animal-frog"></span><em>animal-frog</em></li>
                                                        <li><span class="icofont icofont-animal-frog-tracks"></span><em>animal-frog-tracks</em></li>
                                                        <li><span class="icofont icofont-animal-froggy"></span><em>animal-froggy</em></li>
                                                        <li><span class="icofont icofont-animal-giraffe"></span><em>animal-giraffe</em></li>
                                                        <li><span class="icofont icofont-animal-giraffe-alt"></span><em>animal-giraffe-alt</em></li>
                                                        <li><span class="icofont icofont-animal-goat-head"></span><em>animal-goat-head</em></li>
                                                        <li><span class="icofont icofont-animal-goat-head-alt-1"></span><em>animal-goat-head-alt-1</em></li>
                                                        <li><span class="icofont icofont-animal-goat-head-alt-2"></span><em>animal-goat-head-alt-2</em></li>
                                                        <li><span class="icofont icofont-animal-gorilla"></span><em>animal-gorilla</em></li>
                                                        <li><span class="icofont icofont-animal-hen-tracks"></span><em>animal-hen-tracks</em></li>
                                                        <li><span class="icofont icofont-animal-horse-head"></span><em>animal-horse-head</em></li>
                                                        <li><span class="icofont icofont-animal-horse-head-alt-1"></span><em>animal-horse-head-alt-1</em></li>
                                                        <li><span class="icofont icofont-animal-horse-head-alt-2"></span><em>animal-horse-head-alt-2</em></li>
                                                        <li><span class="icofont icofont-animal-horse-tracks"></span><em>animal-horse-tracks</em></li>
                                                        <li><span class="icofont icofont-animal-jellyfish"></span><em>animal-jellyfish</em></li>
                                                        <li><span class="icofont icofont-animal-kangaroo"></span><em>animal-kangaroo</em></li>
                                                        <li><span class="icofont icofont-animal-lemur"></span><em>animal-lemur</em></li>
                                                        <li><span class="icofont icofont-animal-lion"></span><em>animal-lion</em></li>
                                                        <li><span class="icofont icofont-animal-lion-alt"></span><em>animal-lion-alt</em></li>
                                                        <li><span class="icofont icofont-animal-lion-head"></span><em>animal-lion-head</em></li>
                                                        <li><span class="icofont icofont-animal-lion-head-alt"></span><em>animal-lion-head-alt</em></li>
                                                        <li><span class="icofont icofont-animal-monkey"></span><em>animal-monkey</em></li>
                                                        <li><span class="icofont icofont-animal-monkey-alt-1"></span><em>animal-monkey-alt-1</em></li>
                                                        <li><span class="icofont icofont-animal-monkey-alt-2"></span><em>animal-monkey-alt-2</em></li>
                                                        <li><span class="icofont icofont-animal-monkey-alt-3"></span><em>animal-monkey-alt-3</em></li>
                                                        <li><span class="icofont icofont-animal-octopus"></span><em>animal-octopus</em></li>
                                                        <li><span class="icofont icofont-animal-octopus-alt"></span><em>animal-octopus-alt</em></li>
                                                        <li><span class="icofont icofont-animal-owl"></span><em>animal-owl</em></li>
                                                        <li><span class="icofont icofont-animal-panda"></span><em>animal-panda</em></li>
                                                        <li><span class="icofont icofont-animal-panda-alt"></span><em>animal-panda-alt</em></li>
                                                        <li><span class="icofont icofont-animal-panther"></span><em>animal-panther</em></li>
                                                        <li><span class="icofont icofont-animal-parrot"></span><em>animal-parrot</em></li>
                                                        <li><span class="icofont icofont-animal-parrot-lip"></span><em>animal-parrot-lip</em></li>
                                                        <li><span class="icofont icofont-animal-paw"></span><em>animal-paw</em></li>
                                                        <li><span class="icofont icofont-animal-pelican"></span><em>animal-pelican</em></li>
                                                        <li><span class="icofont icofont-animal-penguin"></span><em>animal-penguin</em></li>
                                                        <li><span class="icofont icofont-animal-pig"></span><em>animal-pig</em></li>
                                                        <li><span class="icofont icofont-animal-pig-alt"></span><em>animal-pig-alt</em></li>
                                                        <li><span class="icofont icofont-animal-pigeon"></span><em>animal-pigeon</em></li>
                                                        <li><span class="icofont icofont-animal-pigeon-alt"></span><em>animal-pigeon-alt</em></li>
                                                        <li><span class="icofont icofont-animal-pigeons"></span><em>animal-pigeons</em></li>
                                                        <li><span class="icofont icofont-animal-rabbit-running"></span><em>animal-rabbit-running</em></li>
                                                        <li><span class="icofont icofont-animal-rat-alt"></span><em>animal-rat-alt</em></li>
                                                        <li><span class="icofont icofont-animal-rhino"></span><em>animal-rhino</em></li>
                                                        <li><span class="icofont icofont-animal-rhino-head"></span><em>animal-rhino-head</em></li>
                                                        <li><span class="icofont icofont-animal-rooster"></span><em>animal-rooster</em></li>
                                                        <li><span class="icofont icofont-animal-seahorse"></span><em>animal-seahorse</em></li>
                                                        <li><span class="icofont icofont-animal-seal"></span><em>animal-seal</em></li>
                                                        <li><span class="icofont icofont-animal-shrimp"></span><em>animal-shrimp</em></li>
                                                        <li><span class="icofont icofont-animal-snail"></span><em>animal-snail</em></li>
                                                        <li><span class="icofont icofont-animal-snail-alt-1"></span><em>animal-snail-alt-1</em></li>
                                                        <li><span class="icofont icofont-animal-snail-alt-2"></span><em>animal-snail-alt-2</em></li>
                                                        <li><span class="icofont icofont-animal-snake"></span><em>animal-snake</em></li>
                                                        <li><span class="icofont icofont-animal-squid"></span><em>animal-squid</em></li>
                                                        <li><span class="icofont icofont-animal-squirrel"></span><em>animal-squirrel</em></li>
                                                        <li><span class="icofont icofont-animal-tiger"></span><em>animal-tiger</em></li>
                                                        <li><span class="icofont icofont-animal-tiger-alt"></span><em>animal-tiger-alt</em></li>
                                                        <li><span class="icofont icofont-animal-turtle"></span><em>animal-turtle</em></li>
                                                        <li><span class="icofont icofont-animal-whale"></span><em>animal-whale</em></li>
                                                        <li><span class="icofont icofont-animal-woodpecker"></span><em>animal-woodpecker</em></li>
                                                        <li><span class="icofont icofont-animal-zebra"></span><em>animal-zebra</em></li>
                                                        <li><span class="icofont icofont-brand-acer"></span><em>brand-acer</em></li>
                                                        <li><span class="icofont icofont-brand-adidas"></span><em>brand-adidas</em></li>
                                                        <li><span class="icofont icofont-brand-adobe"></span><em>brand-adobe</em></li>
                                                        <li><span class="icofont icofont-brand-air-new-zealand"></span><em>brand-air-new-zealand</em></li>
                                                        <li><span class="icofont icofont-brand-airbnb"></span><em>brand-airbnb</em></li>
                                                        <li><span class="icofont icofont-brand-aircell"></span><em>brand-aircell</em></li>
                                                        <li><span class="icofont icofont-brand-airtel"></span><em>brand-airtel</em></li>
                                                        <li><span class="icofont icofont-brand-alcatel"></span><em>brand-alcatel</em></li>
                                                        <li><span class="icofont icofont-brand-alibaba"></span><em>brand-alibaba</em></li>
                                                        <li><span class="icofont icofont-brand-aliexpress"></span><em>brand-aliexpress</em></li>
                                                        <li><span class="icofont icofont-brand-alipay"></span><em>brand-alipay</em></li>
                                                        <li><span class="icofont icofont-brand-amazon"></span><em>brand-amazon</em></li>
                                                        <li><span class="icofont icofont-brand-amd"></span><em>brand-amd</em></li>
                                                        <li><span class="icofont icofont-brand-american-airlines"></span><em>brand-american-airlines</em></li>
                                                        <li><span class="icofont icofont-brand-android"></span><em>brand-android</em></li>
                                                        <li><span class="icofont icofont-brand-android-robot"></span><em>brand-android-robot</em></li>
                                                        <li><span class="icofont icofont-brand-aol"></span><em>brand-aol</em></li>
                                                        <li><span class="icofont icofont-brand-apple"></span><em>brand-apple</em></li>
                                                        <li><span class="icofont icofont-brand-appstore"></span><em>brand-appstore</em></li>
                                                        <li><span class="icofont icofont-brand-asus"></span><em>brand-asus</em></li>
                                                        <li><span class="icofont icofont-brand-ati"></span><em>brand-ati</em></li>
                                                        <li><span class="icofont icofont-brand-att"></span><em>brand-att</em></li>
                                                        <li><span class="icofont icofont-brand-audi"></span><em>brand-audi</em></li>
                                                        <li><span class="icofont icofont-brand-axiata"></span><em>brand-axiata</em></li>
                                                        <li><span class="icofont icofont-brand-bada"></span><em>brand-bada</em></li>
                                                        <li><span class="icofont icofont-brand-bbc"></span><em>brand-bbc</em></li>
                                                        <li><span class="icofont icofont-brand-bing"></span><em>brand-bing</em></li>
                                                        <li><span class="icofont icofont-brand-blackberry"></span><em>brand-blackberry</em></li>
                                                        <li><span class="icofont icofont-brand-bmw"></span><em>brand-bmw</em></li>
                                                        <li><span class="icofont icofont-brand-box"></span><em>brand-box</em></li>
                                                        <li><span class="icofont icofont-brand-burger-king"></span><em>brand-burger-king</em></li>
                                                        <li><span class="icofont icofont-brand-business-insider"></span><em>brand-business-insider</em></li>
                                                        <li><span class="icofont icofont-brand-buzzfeed"></span><em>brand-buzzfeed</em></li>
                                                        <li><span class="icofont icofont-brand-cannon"></span><em>brand-cannon</em></li>
                                                        <li><span class="icofont icofont-brand-casio"></span><em>brand-casio</em></li>
                                                        <li><span class="icofont icofont-brand-china-mobile"></span><em>brand-china-mobile</em></li>
                                                        <li><span class="icofont icofont-brand-china-telecom"></span><em>brand-china-telecom</em></li>
                                                        <li><span class="icofont icofont-brand-china-unicom"></span><em>brand-china-unicom</em></li>
                                                        <li><span class="icofont icofont-brand-cisco"></span><em>brand-cisco</em></li>
                                                        <li><span class="icofont icofont-brand-citibank"></span><em>brand-citibank</em></li>
                                                        <li><span class="icofont icofont-brand-cnet"></span><em>brand-cnet</em></li>
                                                        <li><span class="icofont icofont-brand-cnn"></span><em>brand-cnn</em></li>
                                                        <li><span class="icofont icofont-brand-cocal-cola"></span><em>brand-cocal-cola</em></li>
                                                        <li><span class="icofont icofont-brand-compaq"></span><em>brand-compaq</em></li>
                                                        <li><span class="icofont icofont-brand-copy"></span><em>brand-copy</em></li>
                                                        <li><span class="icofont icofont-brand-debian"></span><em>brand-debian</em></li>
                                                        <li><span class="icofont icofont-brand-delicious"></span><em>brand-delicious</em></li>
                                                        <li><span class="icofont icofont-brand-dell"></span><em>brand-dell</em></li>
                                                        <li><span class="icofont icofont-brand-designbump"></span><em>brand-designbump</em></li>
                                                        <li><span class="icofont icofont-brand-designfloat"></span><em>brand-designfloat</em></li>
                                                        <li><span class="icofont icofont-brand-disney"></span><em>brand-disney</em></li>
                                                        <li><span class="icofont icofont-brand-dodge"></span><em>brand-dodge</em></li>
                                                        <li><span class="icofont icofont-brand-dove"></span><em>brand-dove</em></li>
                                                        <li><span class="icofont icofont-brand-ebay"></span><em>brand-ebay</em></li>
                                                        <li><span class="icofont icofont-brand-eleven"></span><em>brand-eleven</em></li>
                                                        <li><span class="icofont icofont-brand-emirates"></span><em>brand-emirates</em></li>
                                                        <li><span class="icofont icofont-brand-espn"></span><em>brand-espn</em></li>
                                                        <li><span class="icofont icofont-brand-etihad-airways"></span><em>brand-etihad-airways</em></li>
                                                        <li><span class="icofont icofont-brand-etisalat"></span><em>brand-etisalat</em></li>
                                                        <li><span class="icofont icofont-brand-etsy"></span><em>brand-etsy</em></li>
                                                        <li><span class="icofont icofont-brand-facebook"></span><em>brand-facebook</em></li>
                                                        <li><span class="icofont icofont-brand-fastrack"></span><em>brand-fastrack</em></li>
                                                        <li><span class="icofont icofont-brand-fedex"></span><em>brand-fedex</em></li>
                                                        <li><span class="icofont icofont-brand-ferrari"></span><em>brand-ferrari</em></li>
                                                        <li><span class="icofont icofont-brand-fitbit"></span><em>brand-fitbit</em></li>
                                                        <li><span class="icofont icofont-brand-flikr"></span><em>brand-flikr</em></li>
                                                        <li><span class="icofont icofont-brand-forbes"></span><em>brand-forbes</em></li>
                                                        <li><span class="icofont icofont-brand-foursquare"></span><em>brand-foursquare</em></li>
                                                        <li><span class="icofont icofont-brand-fox"></span><em>brand-fox</em></li>
                                                        <li><span class="icofont icofont-brand-foxconn"></span><em>brand-foxconn</em></li>
                                                        <li><span class="icofont icofont-brand-fujitsu"></span><em>brand-fujitsu</em></li>
                                                        <li><span class="icofont icofont-brand-general-electric"></span><em>brand-general-electric</em></li>
                                                        <li><span class="icofont icofont-brand-gillette"></span><em>brand-gillette</em></li>
                                                        <li><span class="icofont icofont-brand-gizmodo"></span><em>brand-gizmodo</em></li>
                                                        <li><span class="icofont icofont-brand-gnome"></span><em>brand-gnome</em></li>
                                                        <li><span class="icofont icofont-brand-google"></span><em>brand-google</em></li>
                                                        <li><span class="icofont icofont-brand-gopro"></span><em>brand-gopro</em></li>
                                                        <li><span class="icofont icofont-brand-gucci"></span><em>brand-gucci</em></li>
                                                        <li><span class="icofont icofont-brand-hallmark"></span><em>brand-hallmark</em></li>
                                                        <li><span class="icofont icofont-brand-hi5"></span><em>brand-hi5</em></li>
                                                        <li><span class="icofont icofont-brand-honda"></span><em>brand-honda</em></li>
                                                        <li><span class="icofont icofont-brand-hp"></span><em>brand-hp</em></li>
                                                        <li><span class="icofont icofont-brand-hsbc"></span><em>brand-hsbc</em></li>
                                                        <li><span class="icofont icofont-brand-htc"></span><em>brand-htc</em></li>
                                                        <li><span class="icofont icofont-brand-huawei"></span><em>brand-huawei</em></li>
                                                        <li><span class="icofont icofont-brand-hulu"></span><em>brand-hulu</em></li>
                                                        <li><span class="icofont icofont-brand-hyundai"></span><em>brand-hyundai</em></li>
                                                        <li><span class="icofont icofont-brand-ibm"></span><em>brand-ibm</em></li>
                                                        <li><span class="icofont icofont-brand-icofont"></span><em>brand-icofont</em></li>
                                                        <li><span class="icofont icofont-brand-icq"></span><em>brand-icq</em></li>
                                                        <li><span class="icofont icofont-brand-ikea"></span><em>brand-ikea</em></li>
                                                        <li><span class="icofont icofont-brand-imdb"></span><em>brand-imdb</em></li>
                                                        <li><span class="icofont icofont-brand-indiegogo"></span><em>brand-indiegogo</em></li>
                                                        <li><span class="icofont icofont-brand-intel"></span><em>brand-intel</em></li>
                                                        <li><span class="icofont icofont-brand-ipair"></span><em>brand-ipair</em></li>
                                                        <li><span class="icofont icofont-brand-jaguar"></span><em>brand-jaguar</em></li>
                                                        <li><span class="icofont icofont-brand-java"></span><em>brand-java</em></li>
                                                        <li><span class="icofont icofont-brand-joomla"></span><em>brand-joomla</em></li>
                                                        <li><span class="icofont icofont-brand-joomshaper"></span><em>brand-joomshaper</em></li>
                                                        <li><span class="icofont icofont-brand-kickstarter"></span><em>brand-kickstarter</em></li>
                                                        <li><span class="icofont icofont-brand-kik"></span><em>brand-kik</em></li>
                                                        <li><span class="icofont icofont-brand-lastfm"></span><em>brand-lastfm</em></li>
                                                        <li><span class="icofont icofont-brand-lego"></span><em>brand-lego</em></li>
                                                        <li><span class="icofont icofont-brand-lenovo"></span><em>brand-lenovo</em></li>
                                                        <li><span class="icofont icofont-brand-levis"></span><em>brand-levis</em></li>
                                                        <li><span class="icofont icofont-brand-lexus"></span><em>brand-lexus</em></li>
                                                        <li><span class="icofont icofont-brand-lg"></span><em>brand-lg</em></li>
                                                        <li><span class="icofont icofont-brand-life-hacker"></span><em>brand-life-hacker</em></li>
                                                        <li><span class="icofont icofont-brand-line-messenger"></span><em>brand-line-messenger</em></li>
                                                        <li><span class="icofont icofont-brand-linkedin"></span><em>brand-linkedin</em></li>
                                                        <li><span class="icofont icofont-brand-linux"></span><em>brand-linux</em></li>
                                                        <li><span class="icofont icofont-brand-linux-mint"></span><em>brand-linux-mint</em></li>
                                                        <li><span class="icofont icofont-brand-lionix"></span><em>brand-lionix</em></li>
                                                        <li><span class="icofont icofont-brand-live-messenger"></span><em>brand-live-messenger</em></li>
                                                        <li><span class="icofont icofont-brand-loreal"></span><em>brand-loreal</em></li>
                                                        <li><span class="icofont icofont-brand-louis-vuitton"></span><em>brand-louis-vuitton</em></li>
                                                        <li><span class="icofont icofont-brand-mac-os"></span><em>brand-mac-os</em></li>
                                                        <li><span class="icofont icofont-brand-marvel-app"></span><em>brand-marvel-app</em></li>
                                                        <li><span class="icofont icofont-brand-mashable"></span><em>brand-mashable</em></li>
                                                        <li><span class="icofont icofont-brand-mazda"></span><em>brand-mazda</em></li>
                                                        <li><span class="icofont icofont-brand-mcdonals"></span><em>brand-mcdonals</em></li>
                                                        <li><span class="icofont icofont-brand-mercedes"></span><em>brand-mercedes</em></li>
                                                        <li><span class="icofont icofont-brand-micromax"></span><em>brand-micromax</em></li>
                                                        <li><span class="icofont icofont-brand-microsoft"></span><em>brand-microsoft</em></li>
                                                        <li><span class="icofont icofont-brand-mobileme"></span><em>brand-mobileme</em></li>
                                                        <li><span class="icofont icofont-brand-mobily"></span><em>brand-mobily</em></li>
                                                        <li><span class="icofont icofont-brand-motorola"></span><em>brand-motorola</em></li>
                                                        <li><span class="icofont icofont-brand-msi"></span><em>brand-msi</em></li>
                                                        <li><span class="icofont icofont-brand-mts"></span><em>brand-mts</em></li>
                                                        <li><span class="icofont icofont-brand-myspace"></span><em>brand-myspace</em></li>
                                                        <li><span class="icofont icofont-brand-mytv"></span><em>brand-mytv</em></li>
                                                        <li><span class="icofont icofont-brand-nasa"></span><em>brand-nasa</em></li>
                                                        <li><span class="icofont icofont-brand-natgeo"></span><em>brand-natgeo</em></li>
                                                        <li><span class="icofont icofont-brand-nbc"></span><em>brand-nbc</em></li>
                                                        <li><span class="icofont icofont-brand-nescafe"></span><em>brand-nescafe</em></li>
                                                        <li><span class="icofont icofont-brand-nestle"></span><em>brand-nestle</em></li>
                                                        <li><span class="icofont icofont-brand-netflix"></span><em>brand-netflix</em></li>
                                                        <li><span class="icofont icofont-brand-nexus"></span><em>brand-nexus</em></li>
                                                        <li><span class="icofont icofont-brand-nike"></span><em>brand-nike</em></li>
                                                        <li><span class="icofont icofont-brand-nokia"></span><em>brand-nokia</em></li>
                                                        <li><span class="icofont icofont-brand-nvidia"></span><em>brand-nvidia</em></li>
                                                        <li><span class="icofont icofont-brand-omega"></span><em>brand-omega</em></li>
                                                        <li><span class="icofont icofont-brand-opensuse"></span><em>brand-opensuse</em></li>
                                                        <li><span class="icofont icofont-brand-oracle"></span><em>brand-oracle</em></li>
                                                        <li><span class="icofont icofont-brand-panasonic"></span><em>brand-panasonic</em></li>
                                                        <li><span class="icofont icofont-brand-paypal"></span><em>brand-paypal</em></li>
                                                        <li><span class="icofont icofont-brand-pepsi"></span><em>brand-pepsi</em></li>
                                                        <li><span class="icofont icofont-brand-philips"></span><em>brand-philips</em></li>
                                                        <li><span class="icofont icofont-brand-pizza-hut"></span><em>brand-pizza-hut</em></li>
                                                        <li><span class="icofont icofont-brand-playstation"></span><em>brand-playstation</em></li>
                                                        <li><span class="icofont icofont-brand-puma"></span><em>brand-puma</em></li>
                                                        <li><span class="icofont icofont-brand-qatar-air"></span><em>brand-qatar-air</em></li>
                                                        <li><span class="icofont icofont-brand-qvc"></span><em>brand-qvc</em></li>
                                                        <li><span class="icofont icofont-brand-readernaut"></span><em>brand-readernaut</em></li>
                                                        <li><span class="icofont icofont-brand-redbull"></span><em>brand-redbull</em></li>
                                                        <li><span class="icofont icofont-brand-reebok"></span><em>brand-reebok</em></li>
                                                        <li><span class="icofont icofont-brand-reuters"></span><em>brand-reuters</em></li>
                                                        <li><span class="icofont icofont-brand-samsung"></span><em>brand-samsung</em></li>
                                                        <li><span class="icofont icofont-brand-sap"></span><em>brand-sap</em></li>
                                                        <li><span class="icofont icofont-brand-saudia-airlines"></span><em>brand-saudia-airlines</em></li>
                                                        <li><span class="icofont icofont-brand-scribd"></span><em>brand-scribd</em></li>
                                                        <li><span class="icofont icofont-brand-shell"></span><em>brand-shell</em></li>
                                                        <li><span class="icofont icofont-brand-siemens"></span><em>brand-siemens</em></li>
                                                        <li><span class="icofont icofont-brand-sk-telecom"></span><em>brand-sk-telecom</em></li>
                                                        <li><span class="icofont icofont-brand-slideshare"></span><em>brand-slideshare</em></li>
                                                        <li><span class="icofont icofont-brand-smashing-magazine"></span><em>brand-smashing-magazine</em></li>
                                                        <li><span class="icofont icofont-brand-snapchat"></span><em>brand-snapchat</em></li>
                                                        <li><span class="icofont icofont-brand-sony"></span><em>brand-sony</em></li>
                                                        <li><span class="icofont icofont-brand-sony-ericsson"></span><em>brand-sony-ericsson</em></li>
                                                        <li><span class="icofont icofont-brand-soundcloud"></span><em>brand-soundcloud</em></li>
                                                        <li><span class="icofont icofont-brand-sprint"></span><em>brand-sprint</em></li>
                                                        <li><span class="icofont icofont-brand-squidoo"></span><em>brand-squidoo</em></li>
                                                        <li><span class="icofont icofont-brand-starbucks"></span><em>brand-starbucks</em></li>
                                                        <li><span class="icofont icofont-brand-stc"></span><em>brand-stc</em></li>
                                                        <li><span class="icofont icofont-brand-steam"></span><em>brand-steam</em></li>
                                                        <li><span class="icofont icofont-brand-suzuki"></span><em>brand-suzuki</em></li>
                                                        <li><span class="icofont icofont-brand-symbian"></span><em>brand-symbian</em></li>
                                                        <li><span class="icofont icofont-brand-t-mobile"></span><em>brand-t-mobile</em></li>
                                                        <li><span class="icofont icofont-brand-tango"></span><em>brand-tango</em></li>
                                                        <li><span class="icofont icofont-brand-target"></span><em>brand-target</em></li>
                                                        <li><span class="icofont icofont-brand-tata-indicom"></span><em>brand-tata-indicom</em></li>
                                                        <li><span class="icofont icofont-brand-techcrunch"></span><em>brand-techcrunch</em></li>
                                                        <li><span class="icofont icofont-brand-telenor"></span><em>brand-telenor</em></li>
                                                        <li><span class="icofont icofont-brand-teliasonera"></span><em>brand-teliasonera</em></li>
                                                        <li><span class="icofont icofont-brand-tesla"></span><em>brand-tesla</em></li>
                                                        <li><span class="icofont icofont-brand-the-verge"></span><em>brand-the-verge</em></li>
                                                        <li><span class="icofont icofont-brand-thenextweb"></span><em>brand-thenextweb</em></li>
                                                        <li><span class="icofont icofont-brand-toshiba"></span><em>brand-toshiba</em></li>
                                                        <li><span class="icofont icofont-brand-toyota"></span><em>brand-toyota</em></li>
                                                        <li><span class="icofont icofont-brand-tribenet"></span><em>brand-tribenet</em></li>
                                                        <li><span class="icofont icofont-brand-ubuntu"></span><em>brand-ubuntu</em></li>
                                                        <li><span class="icofont icofont-brand-unilever"></span><em>brand-unilever</em></li>
                                                        <li><span class="icofont icofont-brand-vaio"></span><em>brand-vaio</em></li>
                                                        <li><span class="icofont icofont-brand-verizon"></span><em>brand-verizon</em></li>
                                                        <li><span class="icofont icofont-brand-viber"></span><em>brand-viber</em></li>
                                                        <li><span class="icofont icofont-brand-vodafone"></span><em>brand-vodafone</em></li>
                                                        <li><span class="icofont icofont-brand-volkswagen"></span><em>brand-volkswagen</em></li>
                                                        <li><span class="icofont icofont-brand-walmart"></span><em>brand-walmart</em></li>
                                                        <li><span class="icofont icofont-brand-warnerbros"></span><em>brand-warnerbros</em></li>
                                                        <li><span class="icofont icofont-brand-whatsapp"></span><em>brand-whatsapp</em></li>
                                                        <li><span class="icofont icofont-brand-wikipedia"></span><em>brand-wikipedia</em></li>
                                                        <li><span class="icofont icofont-brand-windows"></span><em>brand-windows</em></li>
                                                        <li><span class="icofont icofont-brand-wire"></span><em>brand-wire</em></li>
                                                        <li><span class="icofont icofont-brand-wordpress"></span><em>brand-wordpress</em></li>
                                                        <li><span class="icofont icofont-brand-xiaomi"></span><em>brand-xiaomi</em></li>
                                                        <li><span class="icofont icofont-brand-yahoobuzz"></span><em>brand-yahoobuzz</em></li>
                                                        <li><span class="icofont icofont-brand-yamaha"></span><em>brand-yamaha</em></li>
                                                        <li><span class="icofont icofont-brand-youtube"></span><em>brand-youtube</em></li>
                                                        <li><span class="icofont icofont-brand-zain"></span><em>brand-zain</em></li>
                                                        <li><span class="icofont icofont-social-envato"></span><em>social-envato</em></li>
                                                        <li><span class="icofont icofont-bank-alt"></span><em>bank-alt</em></li>
                                                        <li><span class="icofont icofont-barcode"></span><em>barcode</em></li>
                                                        <li><span class="icofont icofont-basket"></span><em>basket</em></li>
                                                        <li><span class="icofont icofont-bill-alt"></span><em>bill-alt</em></li>
                                                        <li><span class="icofont icofont-billboard"></span><em>billboard</em></li>
                                                        <li><span class="icofont icofont-briefcase-alt-1"></span><em>briefcase-alt-1</em></li>
                                                        <li><span class="icofont icofont-briefcase-alt-2"></span><em>briefcase-alt-2</em></li>
                                                        <li><span class="icofont icofont-building-alt"></span><em>building-alt</em></li>
                                                        <li><span class="icofont icofont-businessman"></span><em>businessman</em></li>
                                                        <li><span class="icofont icofont-businesswoman"></span><em>businesswoman</em></li>
                                                        <li><span class="icofont icofont-cart-alt"></span><em>cart-alt</em></li>
                                                        <li><span class="icofont icofont-chair"></span><em>chair</em></li>
                                                        <li><span class="icofont icofont-clip"></span><em>clip</em></li>
                                                        <li><span class="icofont icofont-coins"></span><em>coins</em></li>
                                                        <li><span class="icofont icofont-company"></span><em>company</em></li>
                                                        <li><span class="icofont icofont-contact-add"></span><em>contact-add</em></li>
                                                        <li><span class="icofont icofont-deal"></span><em>deal</em></li>
                                                        <li><span class="icofont icofont-files"></span><em>files</em></li>
                                                        <li><span class="icofont icofont-growth"></span><em>growth</em></li>
                                                        <li><span class="icofont icofont-id-card"></span><em>id-card</em></li>
                                                        <li><span class="icofont icofont-idea"></span><em>idea</em></li>
                                                        <li><span class="icofont icofont-list"></span><em>list</em></li>
                                                        <li><span class="icofont icofont-meeting-add"></span><em>meeting-add</em></li>
                                                        <li><span class="icofont icofont-money-bag"></span><em>money-bag</em></li>
                                                        <li><span class="icofont icofont-people"></span><em>people</em></li>
                                                        <li><span class="icofont icofont-pie-chart"></span><em>pie-chart</em></li>
                                                        <li><span class="icofont icofont-presentation-alt"></span><em>presentation-alt</em></li>
                                                        <li><span class="icofont icofont-stamp"></span><em>stamp</em></li>
                                                        <li><span class="icofont icofont-stock-mobile"></span><em>stock-mobile</em></li>
                                                        <li><span class="icofont icofont-support"></span><em>support</em></li>
                                                        <li><span class="icofont icofont-tasks-alt"></span><em>tasks-alt</em></li>
                                                        <li><span class="icofont icofont-wheel"></span><em>wheel</em></li>
                                                        <li><span class="icofont icofont-chart-arrows-axis"></span><em>chart-arrows-axis</em></li>
                                                        <li><span class="icofont icofont-chart-bar-graph"></span><em>chart-bar-graph</em></li>
                                                        <li><span class="icofont icofont-chart-flow"></span><em>chart-flow</em></li>
                                                        <li><span class="icofont icofont-chart-flow-alt-1"></span><em>chart-flow-alt-1</em></li>
                                                        <li><span class="icofont icofont-chart-flow-alt-2"></span><em>chart-flow-alt-2</em></li>
                                                        <li><span class="icofont icofont-chart-histogram"></span><em>chart-histogram</em></li>
                                                        <li><span class="icofont icofont-chart-histogram-alt"></span><em>chart-histogram-alt</em></li>
                                                        <li><span class="icofont icofont-chart-line"></span><em>chart-line</em></li>
                                                        <li><span class="icofont icofont-chart-line-alt"></span><em>chart-line-alt</em></li>
                                                        <li><span class="icofont icofont-chart-pie"></span><em>chart-pie</em></li>
                                                        <li><span class="icofont icofont-chart-pie-alt"></span><em>chart-pie-alt</em></li>
                                                        <li><span class="icofont icofont-chart-radar-graph"></span><em>chart-radar-graph</em></li>
                                                        <li><span class="icofont icofont-architecture"></span><em>architecture</em></li>
                                                        <li><span class="icofont icofont-architecture-alt"></span><em>architecture-alt</em></li>
                                                        <li><span class="icofont icofont-barricade"></span><em>barricade</em></li>
                                                        <li><span class="icofont icofont-bricks"></span><em>bricks</em></li>
                                                        <li><span class="icofont icofont-calculations"></span><em>calculations</em></li>
                                                        <li><span class="icofont icofont-cement-mix"></span><em>cement-mix</em></li>
                                                        <li><span class="icofont icofont-cement-mixer"></span><em>cement-mixer</em></li>
                                                        <li><span class="icofont icofont-danger-zone"></span><em>danger-zone</em></li>
                                                        <li><span class="icofont icofont-drill"></span><em>drill</em></li>
                                                        <li><span class="icofont icofont-eco-energy"></span><em>eco-energy</em></li>
                                                        <li><span class="icofont icofont-eco-environmen"></span><em>eco-environmen</em></li>
                                                        <li><span class="icofont icofont-energy-air"></span><em>energy-air</em></li>
                                                        <li><span class="icofont icofont-energy-oil"></span><em>energy-oil</em></li>
                                                        <li><span class="icofont icofont-energy-savings"></span><em>energy-savings</em></li>
                                                        <li><span class="icofont icofont-energy-solar"></span><em>energy-solar</em></li>
                                                        <li><span class="icofont icofont-energy-water"></span><em>energy-water</em></li>
                                                        <li><span class="icofont icofont-engineer"></span><em>engineer</em></li>
                                                        <li><span class="icofont icofont-fire-extinguisher-alt"></span><em>fire-extinguisher-alt</em></li>
                                                        <li><span class="icofont icofont-fix-tools"></span><em>fix-tools</em></li>
                                                        <li><span class="icofont icofont-glue-oil"></span><em>glue-oil</em></li>
                                                        <li><span class="icofont icofont-hammer-alt"></span><em>hammer-alt</em></li>
                                                        <li><span class="icofont icofont-help-robot"></span><em>help-robot</em></li>
                                                        <li><span class="icofont icofont-industries"></span><em>industries</em></li>
                                                        <li><span class="icofont icofont-industries-alt-1"></span><em>industries-alt-1</em></li>
                                                        <li><span class="icofont icofont-industries-alt-2"></span><em>industries-alt-2</em></li>
                                                        <li><span class="icofont icofont-industries-alt-3"></span><em>industries-alt-3</em></li>
                                                        <li><span class="icofont icofont-industries-alt-4"></span><em>industries-alt-4</em></li>
                                                        <li><span class="icofont icofont-industries-alt-5"></span><em>industries-alt-5</em></li>
                                                        <li><span class="icofont icofont-labour"></span><em>labour</em></li>
                                                        <li><span class="icofont icofont-mining"></span><em>mining</em></li>
                                                        <li><span class="icofont icofont-paint-brush"></span><em>paint-brush</em></li>
                                                        <li><span class="icofont icofont-pollution"></span><em>pollution</em></li>
                                                        <li><span class="icofont icofont-power-zone"></span><em>power-zone</em></li>
                                                        <li><span class="icofont icofont-radio-active"></span><em>radio-active</em></li>
                                                        <li><span class="icofont icofont-recycle-alt"></span><em>recycle-alt</em></li>
                                                        <li><span class="icofont icofont-recycling-man"></span><em>recycling-man</em></li>
                                                        <li><span class="icofont icofont-safety-hat"></span><em>safety-hat</em></li>
                                                        <li><span class="icofont icofont-safety-hat-light"></span><em>safety-hat-light</em></li>
                                                        <li><span class="icofont icofont-saw"></span><em>saw</em></li>
                                                        <li><span class="icofont icofont-screw-driver"></span><em>screw-driver</em></li>
                                                        <li><span class="icofont icofont-settings-alt"></span><em>settings-alt</em></li>
                                                        <li><span class="icofont icofont-tools-alt-1"></span><em>tools-alt-1</em></li>
                                                        <li><span class="icofont icofont-tools-alt-2"></span><em>tools-alt-2</em></li>
                                                        <li><span class="icofont icofont-tools-bag"></span><em>tools-bag</em></li>
                                                        <li><span class="icofont icofont-trolley"></span><em>trolley</em></li>
                                                        <li><span class="icofont icofont-trowel"></span><em>trowel</em></li>
                                                        <li><span class="icofont icofont-under-construction"></span><em>under-construction</em></li>
                                                        <li><span class="icofont icofont-under-construction-alt"></span><em>under-construction-alt</em></li>
                                                        <li><span class="icofont icofont-vehicle-cement"></span><em>vehicle-cement</em></li>
                                                        <li><span class="icofont icofont-vehicle-crane"></span><em>vehicle-crane</em></li>
                                                        <li><span class="icofont icofont-vehicle-delivery-van"></span><em>vehicle-delivery-van</em></li>
                                                        <li><span class="icofont icofont-vehicle-dozer"></span><em>vehicle-dozer</em></li>
                                                        <li><span class="icofont icofont-vehicle-excavator"></span><em>vehicle-excavator</em></li>
                                                        <li><span class="icofont icofont-vehicle-trucktor"></span><em>vehicle-trucktor</em></li>
                                                        <li><span class="icofont icofont-vehicle-wrecking"></span><em>vehicle-wrecking</em></li>
                                                        <li><span class="icofont icofont-worker"></span><em>worker</em></li>
                                                        <li><span class="icofont icofont-worker-group"></span><em>worker-group</em></li>
                                                        <li><span class="icofont icofont-wrench"></span><em>wrench</em></li>
                                                        <li><span class="icofont icofont-cur-afghani"></span><em>cur-afghani</em></li>
                                                        <li><span class="icofont icofont-cur-afghani-false"></span><em>cur-afghani-false</em></li>
                                                        <li><span class="icofont icofont-cur-afghani-minus"></span><em>cur-afghani-minus</em></li>
                                                        <li><span class="icofont icofont-cur-afghani-plus"></span><em>cur-afghani-plus</em></li>
                                                        <li><span class="icofont icofont-cur-afghani-true"></span><em>cur-afghani-true</em></li>
                                                        <li><span class="icofont icofont-cur-baht"></span><em>cur-baht</em></li>
                                                        <li><span class="icofont icofont-cur-baht-false"></span><em>cur-baht-false</em></li>
                                                        <li><span class="icofont icofont-cur-baht-minus"></span><em>cur-baht-minus</em></li>
                                                        <li><span class="icofont icofont-cur-baht-plus"></span><em>cur-baht-plus</em></li>
                                                        <li><span class="icofont icofont-cur-baht-true"></span><em>cur-baht-true</em></li>
                                                        <li><span class="icofont icofont-cur-bitcoin"></span><em>cur-bitcoin</em></li>
                                                        <li><span class="icofont icofont-cur-bitcoin-false"></span><em>cur-bitcoin-false</em></li>
                                                        <li><span class="icofont icofont-cur-bitcoin-minus"></span><em>cur-bitcoin-minus</em></li>
                                                        <li><span class="icofont icofont-cur-bitcoin-plus"></span><em>cur-bitcoin-plus</em></li>
                                                        <li><span class="icofont icofont-cur-bitcoin-true"></span><em>cur-bitcoin-true</em></li>
                                                        <li><span class="icofont icofont-cur-dollar"></span><em>cur-dollar</em></li>
                                                        <li><span class="icofont icofont-cur-dollar-flase"></span><em>cur-dollar-flase</em></li>
                                                        <li><span class="icofont icofont-cur-dollar-minus"></span><em>cur-dollar-minus</em></li>
                                                        <li><span class="icofont icofont-cur-dollar-plus"></span><em>cur-dollar-plus</em></li>
                                                        <li><span class="icofont icofont-cur-dollar-true"></span><em>cur-dollar-true</em></li>
                                                        <li><span class="icofont icofont-cur-dong"></span><em>cur-dong</em></li>
                                                        <li><span class="icofont icofont-cur-dong-false"></span><em>cur-dong-false</em></li>
                                                        <li><span class="icofont icofont-cur-dong-minus"></span><em>cur-dong-minus</em></li>
                                                        <li><span class="icofont icofont-cur-dong-plus"></span><em>cur-dong-plus</em></li>
                                                        <li><span class="icofont icofont-cur-dong-true"></span><em>cur-dong-true</em></li>
                                                        <li><span class="icofont icofont-cur-euro"></span><em>cur-euro</em></li>
                                                        <li><span class="icofont icofont-cur-euro-false"></span><em>cur-euro-false</em></li>
                                                        <li><span class="icofont icofont-cur-euro-minus"></span><em>cur-euro-minus</em></li>
                                                        <li><span class="icofont icofont-cur-euro-plus"></span><em>cur-euro-plus</em></li>
                                                        <li><span class="icofont icofont-cur-euro-true"></span><em>cur-euro-true</em></li>
                                                        <li><span class="icofont icofont-cur-frank"></span><em>cur-frank</em></li>
                                                        <li><span class="icofont icofont-cur-frank-false"></span><em>cur-frank-false</em></li>
                                                        <li><span class="icofont icofont-cur-frank-minus"></span><em>cur-frank-minus</em></li>
                                                        <li><span class="icofont icofont-cur-frank-plus"></span><em>cur-frank-plus</em></li>
                                                        <li><span class="icofont icofont-cur-frank-true"></span><em>cur-frank-true</em></li>
                                                        <li><span class="icofont icofont-cur-hryvnia"></span><em>cur-hryvnia</em></li>
                                                        <li><span class="icofont icofont-cur-hryvnia-false"></span><em>cur-hryvnia-false</em></li>
                                                        <li><span class="icofont icofont-cur-hryvnia-minus"></span><em>cur-hryvnia-minus</em></li>
                                                        <li><span class="icofont icofont-cur-hryvnia-plus"></span><em>cur-hryvnia-plus</em></li>
                                                        <li><span class="icofont icofont-cur-hryvnia-true"></span><em>cur-hryvnia-true</em></li>
                                                        <li><span class="icofont icofont-cur-lira"></span><em>cur-lira</em></li>
                                                        <li><span class="icofont icofont-cur-lira-false"></span><em>cur-lira-false</em></li>
                                                        <li><span class="icofont icofont-cur-lira-minus"></span><em>cur-lira-minus</em></li>
                                                        <li><span class="icofont icofont-cur-lira-plus"></span><em>cur-lira-plus</em></li>
                                                        <li><span class="icofont icofont-cur-lira-true"></span><em>cur-lira-true</em></li>
                                                        <li><span class="icofont icofont-cur-peseta"></span><em>cur-peseta</em></li>
                                                        <li><span class="icofont icofont-cur-peseta-false"></span><em>cur-peseta-false</em></li>
                                                        <li><span class="icofont icofont-cur-peseta-minus"></span><em>cur-peseta-minus</em></li>
                                                        <li><span class="icofont icofont-cur-peseta-plus"></span><em>cur-peseta-plus</em></li>
                                                        <li><span class="icofont icofont-cur-peseta-true"></span><em>cur-peseta-true</em></li>
                                                        <li><span class="icofont icofont-cur-peso"></span><em>cur-peso</em></li>
                                                        <li><span class="icofont icofont-cur-peso-false"></span><em>cur-peso-false</em></li>
                                                        <li><span class="icofont icofont-cur-peso-minus"></span><em>cur-peso-minus</em></li>
                                                        <li><span class="icofont icofont-cur-peso-plus"></span><em>cur-peso-plus</em></li>
                                                        <li><span class="icofont icofont-cur-peso-true"></span><em>cur-peso-true</em></li>
                                                        <li><span class="icofont icofont-cur-pound"></span><em>cur-pound</em></li>
                                                        <li><span class="icofont icofont-cur-pound-false"></span><em>cur-pound-false</em></li>
                                                        <li><span class="icofont icofont-cur-pound-minus"></span><em>cur-pound-minus</em></li>
                                                        <li><span class="icofont icofont-cur-pound-plus"></span><em>cur-pound-plus</em></li>
                                                        <li><span class="icofont icofont-cur-pound-true"></span><em>cur-pound-true</em></li>
                                                        <li><span class="icofont icofont-cur-renminbi"></span><em>cur-renminbi</em></li>
                                                        <li><span class="icofont icofont-cur-renminbi-false"></span><em>cur-renminbi-false</em></li>
                                                        <li><span class="icofont icofont-cur-renminbi-minus"></span><em>cur-renminbi-minus</em></li>
                                                        <li><span class="icofont icofont-cur-renminbi-plus"></span><em>cur-renminbi-plus</em></li>
                                                        <li><span class="icofont icofont-cur-renminbi-true"></span><em>cur-renminbi-true</em></li>
                                                        <li><span class="icofont icofont-cur-riyal"></span><em>cur-riyal</em></li>
                                                        <li><span class="icofont icofont-cur-riyal-false"></span><em>cur-riyal-false</em></li>
                                                        <li><span class="icofont icofont-cur-riyal-minus"></span><em>cur-riyal-minus</em></li>
                                                        <li><span class="icofont icofont-cur-riyal-plus"></span><em>cur-riyal-plus</em></li>
                                                        <li><span class="icofont icofont-cur-riyal-true"></span><em>cur-riyal-true</em></li>
                                                        <li><span class="icofont icofont-cur-rouble"></span><em>cur-rouble</em></li>
                                                        <li><span class="icofont icofont-cur-rouble-false"></span><em>cur-rouble-false</em></li>
                                                        <li><span class="icofont icofont-cur-rouble-minus"></span><em>cur-rouble-minus</em></li>
                                                        <li><span class="icofont icofont-cur-rouble-plus"></span><em>cur-rouble-plus</em></li>
                                                        <li><span class="icofont icofont-cur-rouble-true"></span><em>cur-rouble-true</em></li>
                                                        <li><span class="icofont icofont-cur-rupee"></span><em>cur-rupee</em></li>
                                                        <li><span class="icofont icofont-cur-rupee-false"></span><em>cur-rupee-false</em></li>
                                                        <li><span class="icofont icofont-cur-rupee-minus"></span><em>cur-rupee-minus</em></li>
                                                        <li><span class="icofont icofont-cur-rupee-plus"></span><em>cur-rupee-plus</em></li>
                                                        <li><span class="icofont icofont-cur-rupee-true"></span><em>cur-rupee-true</em></li>
                                                        <li><span class="icofont icofont-cur-taka"></span><em>cur-taka</em></li>
                                                        <li><span class="icofont icofont-cur-taka-false"></span><em>cur-taka-false</em></li>
                                                        <li><span class="icofont icofont-cur-taka-minus"></span><em>cur-taka-minus</em></li>
                                                        <li><span class="icofont icofont-cur-taka-plus"></span><em>cur-taka-plus</em></li>
                                                        <li><span class="icofont icofont-cur-taka-true"></span><em>cur-taka-true</em></li>
                                                        <li><span class="icofont icofont-cur-turkish-lira"></span><em>cur-turkish-lira</em></li>
                                                        <li><span class="icofont icofont-cur-turkish-lira-false"></span><em>cur-turkish-lira-false</em></li>
                                                        <li><span class="icofont icofont-cur-turkish-lira-minus"></span><em>cur-turkish-lira-minus</em></li>
                                                        <li><span class="icofont icofont-cur-turkish-lira-plus"></span><em>cur-turkish-lira-plus</em></li>
                                                        <li><span class="icofont icofont-cur-turkish-lira-true"></span><em>cur-turkish-lira-true</em></li>
                                                        <li><span class="icofont icofont-cur-won"></span><em>cur-won</em></li>
                                                        <li><span class="icofont icofont-cur-won-false"></span><em>cur-won-false</em></li>
                                                        <li><span class="icofont icofont-cur-won-minus"></span><em>cur-won-minus</em></li>
                                                        <li><span class="icofont icofont-cur-won-plus"></span><em>cur-won-plus</em></li>
                                                        <li><span class="icofont icofont-cur-won-true"></span><em>cur-won-true</em></li>
                                                        <li><span class="icofont icofont-cur-yen"></span><em>cur-yen</em></li>
                                                        <li><span class="icofont icofont-cur-yen-false"></span><em>cur-yen-false</em></li>
                                                        <li><span class="icofont icofont-cur-yen-minus"></span><em>cur-yen-minus</em></li>
                                                        <li><span class="icofont icofont-cur-yen-plus"></span><em>cur-yen-plus</em></li>
                                                        <li><span class="icofont icofont-cur-yen-true"></span><em>cur-yen-true</em></li>
                                                        <li><span class="icofont icofont-android-nexus"></span><em>android-nexus</em></li>
                                                        <li><span class="icofont icofont-android-tablet"></span><em>android-tablet</em></li>
                                                        <li><span class="icofont icofont-apple-watch"></span><em>apple-watch</em></li>
                                                        <li><span class="icofont icofont-drwaing-tablet"></span><em>drwaing-tablet</em></li>
                                                        <li><span class="icofont icofont-earphone"></span><em>earphone</em></li>
                                                        <li><span class="icofont icofont-flash-drive"></span><em>flash-drive</em></li>
                                                        <li><span class="icofont icofont-game-control"></span><em>game-control</em></li>
                                                        <li><span class="icofont icofont-headphone-alt"></span><em>headphone-alt</em></li>
                                                        <li><span class="icofont icofont-htc-one"></span><em>htc-one</em></li>
                                                        <li><span class="icofont icofont-imac"></span><em>imac</em></li>
                                                        <li><span class="icofont icofont-ipad-touch"></span><em>ipad-touch</em></li>
                                                        <li><span class="icofont icofont-iphone"></span><em>iphone</em></li>
                                                        <li><span class="icofont icofont-ipod-nano"></span><em>ipod-nano</em></li>
                                                        <li><span class="icofont icofont-ipod-touch"></span><em>ipod-touch</em></li>
                                                        <li><span class="icofont icofont-keyboard-alt"></span><em>keyboard-alt</em></li>
                                                        <li><span class="icofont icofont-keyboard-wireless"></span><em>keyboard-wireless</em></li>
                                                        <li><span class="icofont icofont-laptop-alt"></span><em>laptop-alt</em></li>
                                                        <li><span class="icofont icofont-macbook"></span><em>macbook</em></li>
                                                        <li><span class="icofont icofont-magic-mouse"></span><em>magic-mouse</em></li>
                                                        <li><span class="icofont icofont-microphone-alt"></span><em>microphone-alt</em></li>
                                                        <li><span class="icofont icofont-monitor"></span><em>monitor</em></li>
                                                        <li><span class="icofont icofont-mouse"></span><em>mouse</em></li>
                                                        <li><span class="icofont icofont-nintendo"></span><em>nintendo</em></li>
                                                        <li><span class="icofont icofont-playstation"></span><em>playstation</em></li>
                                                        <li><span class="icofont icofont-psvita"></span><em>psvita</em></li>
                                                        <li><span class="icofont icofont-radio-mic"></span><em>radio-mic</em></li>
                                                        <li><span class="icofont icofont-refrigerator"></span><em>refrigerator</em></li>
                                                        <li><span class="icofont icofont-samsung-galaxy"></span><em>samsung-galaxy</em></li>
                                                        <li><span class="icofont icofont-surface-tablet"></span><em>surface-tablet</em></li>
                                                        <li><span class="icofont icofont-washing-machine"></span><em>washing-machine</em></li>
                                                        <li><span class="icofont icofont-wifi-router"></span><em>wifi-router</em></li>
                                                        <li><span class="icofont icofont-wii-u"></span><em>wii-u</em></li>
                                                        <li><span class="icofont icofont-windows-lumia"></span><em>windows-lumia</em></li>
                                                        <li><span class="icofont icofont-wireless-mouse"></span><em>wireless-mouse</em></li>
                                                        <li><span class="icofont icofont-xbox-360"></span><em>xbox-360</em></li>
                                                        <li><span class="icofont icofont-arrow-down"></span><em>arrow-down</em></li>
                                                        <li><span class="icofont icofont-arrow-left"></span><em>arrow-left</em></li>
                                                        <li><span class="icofont icofont-arrow-right"></span><em>arrow-right</em></li>
                                                        <li><span class="icofont icofont-arrow-up"></span><em>arrow-up</em></li>
                                                        <li><span class="icofont icofont-block-down"></span><em>block-down</em></li>
                                                        <li><span class="icofont icofont-block-left"></span><em>block-left</em></li>
                                                        <li><span class="icofont icofont-block-right"></span><em>block-right</em></li>
                                                        <li><span class="icofont icofont-block-up"></span><em>block-up</em></li>
                                                        <li><span class="icofont icofont-bubble-down"></span><em>bubble-down</em></li>
                                                        <li><span class="icofont icofont-bubble-left"></span><em>bubble-left</em></li>
                                                        <li><span class="icofont icofont-bubble-right"></span><em>bubble-right</em></li>
                                                        <li><span class="icofont icofont-bubble-up"></span><em>bubble-up</em></li>
                                                        <li><span class="icofont icofont-caret-down"></span><em>caret-down</em></li>
                                                        <li><span class="icofont icofont-caret-left"></span><em>caret-left</em></li>
                                                        <li><span class="icofont icofont-caret-right"></span><em>caret-right</em></li>
                                                        <li><span class="icofont icofont-caret-up"></span><em>caret-up</em></li>
                                                        <li><span class="icofont icofont-circled-down"></span><em>circled-down</em></li>
                                                        <li><span class="icofont icofont-circled-left"></span><em>circled-left</em></li>
                                                        <li><span class="icofont icofont-circled-right"></span><em>circled-right</em></li>
                                                        <li><span class="icofont icofont-circled-up"></span><em>circled-up</em></li>
                                                        <li><span class="icofont icofont-collapse"></span><em>collapse</em></li>
                                                        <li><span class="icofont icofont-cursor-drag"></span><em>cursor-drag</em></li>
                                                        <li><span class="icofont icofont-curved-double-left"></span><em>curved-double-left</em></li>
                                                        <li><span class="icofont icofont-curved-double-right"></span><em>curved-double-right</em></li>
                                                        <li><span class="icofont icofont-curved-down"></span><em>curved-down</em></li>
                                                        <li><span class="icofont icofont-curved-left"></span><em>curved-left</em></li>
                                                        <li><span class="icofont icofont-curved-right"></span><em>curved-right</em></li>
                                                        <li><span class="icofont icofont-curved-up"></span><em>curved-up</em></li>
                                                        <li><span class="icofont icofont-dotted-down"></span><em>dotted-down</em></li>
                                                        <li><span class="icofont icofont-dotted-left"></span><em>dotted-left</em></li>
                                                        <li><span class="icofont icofont-dotted-right"></span><em>dotted-right</em></li>
                                                        <li><span class="icofont icofont-dotted-up"></span><em>dotted-up</em></li>
                                                        <li><span class="icofont icofont-double-left"></span><em>double-left</em></li>
                                                        <li><span class="icofont icofont-double-right"></span><em>double-right</em></li>
                                                        <li><span class="icofont icofont-drag"></span><em>drag</em></li>
                                                        <li><span class="icofont icofont-drag1"></span><em>drag1</em></li>
                                                        <li><span class="icofont icofont-drag2"></span><em>drag2</em></li>
                                                        <li><span class="icofont icofont-drag3"></span><em>drag3</em></li>
                                                        <li><span class="icofont icofont-expand-alt"></span><em>expand-alt</em></li>
                                                        <li><span class="icofont icofont-hand-down"></span><em>hand-down</em></li>
                                                        <li><span class="icofont icofont-hand-drag"></span><em>hand-drag</em></li>
                                                        <li><span class="icofont icofont-hand-drag1"></span><em>hand-drag1</em></li>
                                                        <li><span class="icofont icofont-hand-drag2"></span><em>hand-drag2</em></li>
                                                        <li><span class="icofont icofont-hand-drawn-alt-down"></span><em>hand-drawn-alt-down</em></li>
                                                        <li><span class="icofont icofont-hand-drawn-alt-left"></span><em>hand-drawn-alt-left</em></li>
                                                        <li><span class="icofont icofont-hand-drawn-alt-right"></span><em>hand-drawn-alt-right</em></li>
                                                        <li><span class="icofont icofont-hand-drawn-alt-up"></span><em>hand-drawn-alt-up</em></li>
                                                        <li><span class="icofont icofont-hand-drawn-down"></span><em>hand-drawn-down</em></li>
                                                        <li><span class="icofont icofont-hand-drawn-left"></span><em>hand-drawn-left</em></li>
                                                        <li><span class="icofont icofont-hand-drawn-right"></span><em>hand-drawn-right</em></li>
                                                        <li><span class="icofont icofont-hand-drawn-up"></span><em>hand-drawn-up</em></li>
                                                        <li><span class="icofont icofont-hand-left"></span><em>hand-left</em></li>
                                                        <li><span class="icofont icofont-hand-right"></span><em>hand-right</em></li>
                                                        <li><span class="icofont icofont-hand-up"></span><em>hand-up</em></li>
                                                        <li><span class="icofont icofont-line-block-down"></span><em>line-block-down</em></li>
                                                        <li><span class="icofont icofont-line-block-left"></span><em>line-block-left</em></li>
                                                        <li><span class="icofont icofont-line-block-right"></span><em>line-block-right</em></li>
                                                        <li><span class="icofont icofont-line-block-up"></span><em>line-block-up</em></li>
                                                        <li><span class="icofont icofont-long-arrow-down"></span><em>long-arrow-down</em></li>
                                                        <li><span class="icofont icofont-long-arrow-left"></span><em>long-arrow-left</em></li>
                                                        <li><span class="icofont icofont-long-arrow-right"></span><em>long-arrow-right</em></li>
                                                        <li><span class="icofont icofont-long-arrow-up"></span><em>long-arrow-up</em></li>
                                                        <li><span class="icofont icofont-rounded-collapse"></span><em>rounded-collapse</em></li>
                                                        <li><span class="icofont icofont-rounded-double-left"></span><em>rounded-double-left</em></li>
                                                        <li><span class="icofont icofont-rounded-double-right"></span><em>rounded-double-right</em></li>
                                                        <li><span class="icofont icofont-rounded-down"></span><em>rounded-down</em></li>
                                                        <li><span class="icofont icofont-rounded-expand"></span><em>rounded-expand</em></li>
                                                        <li><span class="icofont icofont-rounded-left"></span><em>rounded-left</em></li>
                                                        <li><span class="icofont icofont-rounded-left-down"></span><em>rounded-left-down</em></li>
                                                        <li><span class="icofont icofont-rounded-left-up"></span><em>rounded-left-up</em></li>
                                                        <li><span class="icofont icofont-rounded-right"></span><em>rounded-right</em></li>
                                                        <li><span class="icofont icofont-rounded-right-down"></span><em>rounded-right-down</em></li>
                                                        <li><span class="icofont icofont-rounded-right-up"></span><em>rounded-right-up</em></li>
                                                        <li><span class="icofont icofont-rounded-up"></span><em>rounded-up</em></li>
                                                        <li><span class="icofont icofont-scroll-bubble-down"></span><em>scroll-bubble-down</em></li>
                                                        <li><span class="icofont icofont-scroll-bubble-left"></span><em>scroll-bubble-left</em></li>
                                                        <li><span class="icofont icofont-scroll-bubble-right"></span><em>scroll-bubble-right</em></li>
                                                        <li><span class="icofont icofont-scroll-bubble-up"></span><em>scroll-bubble-up</em></li>
                                                        <li><span class="icofont icofont-scroll-double-down"></span><em>scroll-double-down</em></li>
                                                        <li><span class="icofont icofont-scroll-double-left"></span><em>scroll-double-left</em></li>
                                                        <li><span class="icofont icofont-scroll-double-right"></span><em>scroll-double-right</em></li>
                                                        <li><span class="icofont icofont-scroll-double-up"></span><em>scroll-double-up</em></li>
                                                        <li><span class="icofont icofont-scroll-down"></span><em>scroll-down</em></li>
                                                        <li><span class="icofont icofont-scroll-left"></span><em>scroll-left</em></li>
                                                        <li><span class="icofont icofont-scroll-long-down"></span><em>scroll-long-down</em></li>
                                                        <li><span class="icofont icofont-scroll-long-left"></span><em>scroll-long-left</em></li>
                                                        <li><span class="icofont icofont-scroll-long-right"></span><em>scroll-long-right</em></li>
                                                        <li><span class="icofont icofont-scroll-long-up"></span><em>scroll-long-up</em></li>
                                                        <li><span class="icofont icofont-scroll-right"></span><em>scroll-right</em></li>
                                                        <li><span class="icofont icofont-scroll-up"></span><em>scroll-up</em></li>
                                                        <li><span class="icofont icofont-simple-down"></span><em>simple-down</em></li>
                                                        <li><span class="icofont icofont-simple-left"></span><em>simple-left</em></li>
                                                        <li><span class="icofont icofont-simple-left-down"></span><em>simple-left-down</em></li>
                                                        <li><span class="icofont icofont-simple-left-up"></span><em>simple-left-up</em></li>
                                                        <li><span class="icofont icofont-simple-right"></span><em>simple-right</em></li>
                                                        <li><span class="icofont icofont-simple-right-down"></span><em>simple-right-down</em></li>
                                                        <li><span class="icofont icofont-simple-right-up"></span><em>simple-right-up</em></li>
                                                        <li><span class="icofont icofont-simple-up"></span><em>simple-up</em></li>
                                                        <li><span class="icofont icofont-square-down"></span><em>square-down</em></li>
                                                        <li><span class="icofont icofont-square-left"></span><em>square-left</em></li>
                                                        <li><span class="icofont icofont-square-right"></span><em>square-right</em></li>
                                                        <li><span class="icofont icofont-square-up"></span><em>square-up</em></li>
                                                        <li><span class="icofont icofont-stylish-down"></span><em>stylish-down</em></li>
                                                        <li><span class="icofont icofont-stylish-left"></span><em>stylish-left</em></li>
                                                        <li><span class="icofont icofont-stylish-right"></span><em>stylish-right</em></li>
                                                        <li><span class="icofont icofont-stylish-up"></span><em>stylish-up</em></li>
                                                        <li><span class="icofont icofont-swoosh-down"></span><em>swoosh-down</em></li>
                                                        <li><span class="icofont icofont-swoosh-left"></span><em>swoosh-left</em></li>
                                                        <li><span class="icofont icofont-swoosh-right"></span><em>swoosh-right</em></li>
                                                        <li><span class="icofont icofont-swoosh-up"></span><em>swoosh-up</em></li>
                                                        <li><span class="icofont icofont-thin-double-left"></span><em>thin-double-left</em></li>
                                                        <li><span class="icofont icofont-thin-double-right"></span><em>thin-double-right</em></li>
                                                        <li><span class="icofont icofont-thin-down"></span><em>thin-down</em></li>
                                                        <li><span class="icofont icofont-thin-left"></span><em>thin-left</em></li>
                                                        <li><span class="icofont icofont-thin-right"></span><em>thin-right</em></li>
                                                        <li><span class="icofont icofont-thin-up"></span><em>thin-up</em></li>
                                                        <li><span class="icofont icofont-atom"></span><em>atom</em></li>
                                                        <li><span class="icofont icofont-award"></span><em>award</em></li>
                                                        <li><span class="icofont icofont-bell-alt"></span><em>bell-alt</em></li>
                                                        <li><span class="icofont icofont-book-alt"></span><em>book-alt</em></li>
                                                        <li><span class="icofont icofont-brainstorming"></span><em>brainstorming</em></li>
                                                        <li><span class="icofont icofont-certificate-alt-1"></span><em>certificate-alt-1</em></li>
                                                        <li><span class="icofont icofont-certificate-alt-2"></span><em>certificate-alt-2</em></li>
                                                        <li><span class="icofont icofont-dna-alt-2"></span><em>dna-alt-2</em></li>
                                                        <li><span class="icofont icofont-education"></span><em>education</em></li>
                                                        <li><span class="icofont icofont-electron"></span><em>electron</em></li>
                                                        <li><span class="icofont icofont-fountain-pen"></span><em>fountain-pen</em></li>
                                                        <li><span class="icofont icofont-globe-alt"></span><em>globe-alt</em></li>
                                                        <li><span class="icofont icofont-graduate-alt"></span><em>graduate-alt</em></li>
                                                        <li><span class="icofont icofont-group-students"></span><em>group-students</em></li>
                                                        <li><span class="icofont icofont-hat"></span><em>hat</em></li>
                                                        <li><span class="icofont icofont-hat-alt"></span><em>hat-alt</em></li>
                                                        <li><span class="icofont icofont-instrument"></span><em>instrument</em></li>
                                                        <li><span class="icofont icofont-lamp-light"></span><em>lamp-light</em></li>
                                                        <li><span class="icofont icofont-microscope-alt"></span><em>microscope-alt</em></li>
                                                        <li><span class="icofont icofont-paper"></span><em>paper</em></li>
                                                        <li><span class="icofont icofont-pen-alt-4"></span><em>pen-alt-4</em></li>
                                                        <li><span class="icofont icofont-pen-nib"></span><em>pen-nib</em></li>
                                                        <li><span class="icofont icofont-pencil-alt-5"></span><em>pencil-alt-5</em></li>
                                                        <li><span class="icofont icofont-quill-pen"></span><em>quill-pen</em></li>
                                                        <li><span class="icofont icofont-read-book"></span><em>read-book</em></li>
                                                        <li><span class="icofont icofont-read-book-alt"></span><em>read-book-alt</em></li>
                                                        <li><span class="icofont icofont-school-bag"></span><em>school-bag</em></li>
                                                        <li><span class="icofont icofont-school-bus"></span><em>school-bus</em></li>
                                                        <li><span class="icofont icofont-student"></span><em>student</em></li>
                                                        <li><span class="icofont icofont-student-alt"></span><em>student-alt</em></li>
                                                        <li><span class="icofont icofont-teacher"></span><em>teacher</em></li>
                                                        <li><span class="icofont icofont-test-bulb"></span><em>test-bulb</em></li>
                                                        <li><span class="icofont icofont-test-tube-alt"></span><em>test-tube-alt</em></li>
                                                        <li><span class="icofont icofont-university"></span><em>university</em></li>
                                                        <li><span class="icofont icofont-emo-angry"></span><em>emo-angry</em></li>
                                                        <li><span class="icofont icofont-emo-astonished"></span><em>emo-astonished</em></li>
                                                        <li><span class="icofont icofont-emo-confounded"></span><em>emo-confounded</em></li>
                                                        <li><span class="icofont icofont-emo-confused"></span><em>emo-confused</em></li>
                                                        <li><span class="icofont icofont-emo-crying"></span><em>emo-crying</em></li>
                                                        <li><span class="icofont icofont-emo-dizzy"></span><em>emo-dizzy</em></li>
                                                        <li><span class="icofont icofont-emo-expressionless"></span><em>emo-expressionless</em></li>
                                                        <li><span class="icofont icofont-emo-heart-eyes"></span><em>emo-heart-eyes</em></li>
                                                        <li><span class="icofont icofont-emo-laughing"></span><em>emo-laughing</em></li>
                                                        <li><span class="icofont icofont-emo-nerd-smile"></span><em>emo-nerd-smile</em></li>
                                                        <li><span class="icofont icofont-emo-open-mouth"></span><em>emo-open-mouth</em></li>
                                                        <li><span class="icofont icofont-emo-rage"></span><em>emo-rage</em></li>
                                                        <li><span class="icofont icofont-emo-rolling-eyes"></span><em>emo-rolling-eyes</em></li>
                                                        <li><span class="icofont icofont-emo-sad"></span><em>emo-sad</em></li>
                                                        <li><span class="icofont icofont-emo-simple-smile"></span><em>emo-simple-smile</em></li>
                                                        <li><span class="icofont icofont-emo-slightly-smile"></span><em>emo-slightly-smile</em></li>
                                                        <li><span class="icofont icofont-emo-smirk"></span><em>emo-smirk</em></li>
                                                        <li><span class="icofont icofont-emo-stuck-out-tongue"></span><em>emo-stuck-out-tongue</em></li>
                                                        <li><span class="icofont icofont-emo-wink-smile"></span><em>emo-wink-smile</em></li>
                                                        <li><span class="icofont icofont-emo-worried"></span><em>emo-worried</em></li>
                                                        <li><span class="icofont icofont-file-audio"></span><em>file-audio</em></li>
                                                        <li><span class="icofont icofont-file-avi-mp4"></span><em>file-avi-mp4</em></li>
                                                        <li><span class="icofont icofont-file-bmp"></span><em>file-bmp</em></li>
                                                        <li><span class="icofont icofont-file-code"></span><em>file-code</em></li>
                                                        <li><span class="icofont icofont-file-css"></span><em>file-css</em></li>
                                                        <li><span class="icofont icofont-file-document"></span><em>file-document</em></li>
                                                        <li><span class="icofont icofont-file-eps"></span><em>file-eps</em></li>
                                                        <li><span class="icofont icofont-file-excel"></span><em>file-excel</em></li>
                                                        <li><span class="icofont icofont-file-exe"></span><em>file-exe</em></li>
                                                        <li><span class="icofont icofont-file-file"></span><em>file-file</em></li>
                                                        <li><span class="icofont icofont-file-flv"></span><em>file-flv</em></li>
                                                        <li><span class="icofont icofont-file-gif"></span><em>file-gif</em></li>
                                                        <li><span class="icofont icofont-file-html5"></span><em>file-html5</em></li>
                                                        <li><span class="icofont icofont-file-image"></span><em>file-image</em></li>
                                                        <li><span class="icofont icofont-file-iso"></span><em>file-iso</em></li>
                                                        <li><span class="icofont icofont-file-java"></span><em>file-java</em></li>
                                                        <li><span class="icofont icofont-file-javascript"></span><em>file-javascript</em></li>
                                                        <li><span class="icofont icofont-file-jpg"></span><em>file-jpg</em></li>
                                                        <li><span class="icofont icofont-file-midi"></span><em>file-midi</em></li>
                                                        <li><span class="icofont icofont-file-mov"></span><em>file-mov</em></li>
                                                        <li><span class="icofont icofont-file-mp3"></span><em>file-mp3</em></li>
                                                        <li><span class="icofont icofont-file-pdf"></span><em>file-pdf</em></li>
                                                        <li><span class="icofont icofont-file-php"></span><em>file-php</em></li>
                                                        <li><span class="icofont icofont-file-png"></span><em>file-png</em></li>
                                                        <li><span class="icofont icofont-file-powerpoint"></span><em>file-powerpoint</em></li>
                                                        <li><span class="icofont icofont-file-presentation"></span><em>file-presentation</em></li>
                                                        <li><span class="icofont icofont-file-psb"></span><em>file-psb</em></li>
                                                        <li><span class="icofont icofont-file-psd"></span><em>file-psd</em></li>
                                                        <li><span class="icofont icofont-file-python"></span><em>file-python</em></li>
                                                        <li><span class="icofont icofont-file-ruby"></span><em>file-ruby</em></li>
                                                        <li><span class="icofont icofont-file-spreadsheet"></span><em>file-spreadsheet</em></li>
                                                        <li><span class="icofont icofont-file-sql"></span><em>file-sql</em></li>
                                                        <li><span class="icofont icofont-file-svg"></span><em>file-svg</em></li>
                                                        <li><span class="icofont icofont-file-text"></span><em>file-text</em></li>
                                                        <li><span class="icofont icofont-file-tiff"></span><em>file-tiff</em></li>
                                                        <li><span class="icofont icofont-file-video"></span><em>file-video</em></li>
                                                        <li><span class="icofont icofont-file-wave"></span><em>file-wave</em></li>
                                                        <li><span class="icofont icofont-file-wmv"></span><em>file-wmv</em></li>
                                                        <li><span class="icofont icofont-file-word"></span><em>file-word</em></li>
                                                        <li><span class="icofont icofont-file-zip"></span><em>file-zip</em></li>
                                                        <li><span class="icofont icofont-bag-alt"></span><em>bag-alt</em></li>
                                                        <li><span class="icofont icofont-burglar"></span><em>burglar</em></li>
                                                        <li><span class="icofont icofont-cannon-firing"></span><em>cannon-firing</em></li>
                                                        <li><span class="icofont icofont-cc-camera"></span><em>cc-camera</em></li>
                                                        <li><span class="icofont icofont-cop"></span><em>cop</em></li>
                                                        <li><span class="icofont icofont-cop-badge"></span><em>cop-badge</em></li>
                                                        <li><span class="icofont icofont-court"></span><em>court</em></li>
                                                        <li><span class="icofont icofont-court-hammer"></span><em>court-hammer</em></li>
                                                        <li><span class="icofont icofont-finger-print"></span><em>finger-print</em></li>
                                                        <li><span class="icofont icofont-handcuff"></span><em>handcuff</em></li>
                                                        <li><span class="icofont icofont-handcuff-alt"></span><em>handcuff-alt</em></li>
                                                        <li><span class="icofont icofont-investigation"></span><em>investigation</em></li>
                                                        <li><span class="icofont icofont-investigator"></span><em>investigator</em></li>
                                                        <li><span class="icofont icofont-jail"></span><em>jail</em></li>
                                                        <li><span class="icofont icofont-judge"></span><em>judge</em></li>
                                                        <li><span class="icofont icofont-law"></span><em>law</em></li>
                                                        <li><span class="icofont icofont-law-alt-1"></span><em>law-alt-1</em></li>
                                                        <li><span class="icofont icofont-law-alt-2"></span><em>law-alt-2</em></li>
                                                        <li><span class="icofont icofont-law-alt-3"></span><em>law-alt-3</em></li>
                                                        <li><span class="icofont icofont-law-book"></span><em>law-book</em></li>
                                                        <li><span class="icofont icofont-law-document"></span><em>law-document</em></li>
                                                        <li><span class="icofont icofont-lawyer"></span><em>lawyer</em></li>
                                                        <li><span class="icofont icofont-lawyer-alt-1"></span><em>lawyer-alt-1</em></li>
                                                        <li><span class="icofont icofont-lawyer-alt-2"></span><em>lawyer-alt-2</em></li>
                                                        <li><span class="icofont icofont-order"></span><em>order</em></li>
                                                        <li><span class="icofont icofont-pistol"></span><em>pistol</em></li>
                                                        <li><span class="icofont icofont-police"></span><em>police</em></li>
                                                        <li><span class="icofont icofont-police-badge"></span><em>police-badge</em></li>
                                                        <li><span class="icofont icofont-police-cap"></span><em>police-cap</em></li>
                                                        <li><span class="icofont icofont-police-car-alt-1"></span><em>police-car-alt-1</em></li>
                                                        <li><span class="icofont icofont-police-car-alt-2"></span><em>police-car-alt-2</em></li>
                                                        <li><span class="icofont icofont-police-hat"></span><em>police-hat</em></li>
                                                        <li><span class="icofont icofont-police-van"></span><em>police-van</em></li>
                                                        <li><span class="icofont icofont-protect"></span><em>protect</em></li>
                                                        <li><span class="icofont icofont-scales"></span><em>scales</em></li>
                                                        <li><span class="icofont icofont-thief"></span><em>thief</em></li>
                                                        <li><span class="icofont icofont-thief-alt"></span><em>thief-alt</em></li>
                                                        <li><span class="icofont icofont-abacus"></span><em>abacus</em></li>
                                                        <li><span class="icofont icofont-abacus-alt"></span><em>abacus-alt</em></li>
                                                        <li><span class="icofont icofont-angle"></span><em>angle</em></li>
                                                        <li><span class="icofont icofont-calculator-alt-1"></span><em>calculator-alt-1</em></li>
                                                        <li><span class="icofont icofont-calculator-alt-2"></span><em>calculator-alt-2</em></li>
                                                        <li><span class="icofont icofont-circle-ruler"></span><em>circle-ruler</em></li>
                                                        <li><span class="icofont icofont-circle-ruler-alt"></span><em>circle-ruler-alt</em></li>
                                                        <li><span class="icofont icofont-compass-alt-1"></span><em>compass-alt-1</em></li>
                                                        <li><span class="icofont icofont-compass-alt-2"></span><em>compass-alt-2</em></li>
                                                        <li><span class="icofont icofont-compass-alt-3"></span><em>compass-alt-3</em></li>
                                                        <li><span class="icofont icofont-compass-alt-4"></span><em>compass-alt-4</em></li>
                                                        <li><span class="icofont icofont-degrees"></span><em>degrees</em></li>
                                                        <li><span class="icofont icofont-degrees-alt-1"></span><em>degrees-alt-1</em></li>
                                                        <li><span class="icofont icofont-degrees-alt-2"></span><em>degrees-alt-2</em></li>
                                                        <li><span class="icofont icofont-golden-ratio"></span><em>golden-ratio</em></li>
                                                        <li><span class="icofont icofont-marker-alt-1"></span><em>marker-alt-1</em></li>
                                                        <li><span class="icofont icofont-marker-alt-2"></span><em>marker-alt-2</em></li>
                                                        <li><span class="icofont icofont-marker-alt-3"></span><em>marker-alt-3</em></li>
                                                        <li><span class="icofont icofont-mathematical"></span><em>mathematical</em></li>
                                                        <li><span class="icofont icofont-mathematical-alt-1"></span><em>mathematical-alt-1</em></li>
                                                        <li><span class="icofont icofont-mathematical-alt-2"></span><em>mathematical-alt-2</em></li>
                                                        <li><span class="icofont icofont-pen-alt-1"></span><em>pen-alt-1</em></li>
                                                        <li><span class="icofont icofont-pen-alt-2"></span><em>pen-alt-2</em></li>
                                                        <li><span class="icofont icofont-pen-alt-3"></span><em>pen-alt-3</em></li>
                                                        <li><span class="icofont icofont-pen-holder"></span><em>pen-holder</em></li>
                                                        <li><span class="icofont icofont-pen-holder-alt-1"></span><em>pen-holder-alt-1</em></li>
                                                        <li><span class="icofont icofont-pencil-alt-1"></span><em>pencil-alt-1</em></li>
                                                        <li><span class="icofont icofont-pencil-alt-2"></span><em>pencil-alt-2</em></li>
                                                        <li><span class="icofont icofont-pencil-alt-3"></span><em>pencil-alt-3</em></li>
                                                        <li><span class="icofont icofont-pencil-alt-4"></span><em>pencil-alt-4</em></li>
                                                        <li><span class="icofont icofont-ruler"></span><em>ruler</em></li>
                                                        <li><span class="icofont icofont-ruler-alt-1"></span><em>ruler-alt-1</em></li>
                                                        <li><span class="icofont icofont-ruler-alt-2"></span><em>ruler-alt-2</em></li>
                                                        <li><span class="icofont icofont-ruler-compass"></span><em>ruler-compass</em></li>
                                                        <li><span class="icofont icofont-ruler-compass-alt"></span><em>ruler-compass-alt</em></li>
                                                        <li><span class="icofont icofont-ruler-pencil"></span><em>ruler-pencil</em></li>
                                                        <li><span class="icofont icofont-ruler-pencil-alt-1"></span><em>ruler-pencil-alt-1</em></li>
                                                        <li><span class="icofont icofont-ruler-pencil-alt-2"></span><em>ruler-pencil-alt-2</em></li>
                                                        <li><span class="icofont icofont-rulers"></span><em>rulers</em></li>
                                                        <li><span class="icofont icofont-rulers-alt"></span><em>rulers-alt</em></li>
                                                        <li><span class="icofont icofont-square-root"></span><em>square-root</em></li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane fade show active" id="pills-themify" role="tabpanel" aria-labelledby="themify-tab">
                                                    <ul class="the-icons clearfix">
                                                        <li><span class="icon-arrow-up"></span><em> icon-arrow-up</em></li>
                                                        <li><span class="icon-arrow-right"></span><em> icon-arrow-right</em></li>
                                                        <li><span class="icon-arrow-left"></span><em> icon-arrow-left</em></li>
                                                        <li><span class="icon-arrow-down"></span><em> icon-arrow-down</em></li>
                                                        <li><span class="icon-arrows-vertical"></span><em> icon-arrows-vertical</em></li>
                                                        <li><span class="icon-arrows-horizontal"></span><em> icon-arrows-horizontal</em></li>
                                                        <li><span class="icon-angle-up"></span><em> icon-angle-up</em></li>
                                                        <li><span class="icon-angle-right"></span><em> icon-angle-right</em></li>
                                                        <li><span class="icon-angle-left"></span><em> icon-angle-left</em></li>
                                                        <li><span class="icon-angle-down"></span><em> icon-angle-down</em></li>
                                                        <li><span class="icon-angle-double-up"></span><em> icon-angle-double-up</em></li>
                                                        <li><span class="icon-angle-double-right"></span><em> icon-angle-double-right</em></li>
                                                        <li><span class="icon-angle-double-left"></span><em> icon-angle-double-left</em></li>
                                                        <li><span class="icon-angle-double-down"></span><em> icon-angle-double-down</em></li>
                                                        <li><span class="icon-move"></span><em> icon-move</em></li>
                                                        <li><span class="icon-fullscreen"></span><em> icon-fullscreen</em></li>
                                                        <li><span class="icon-arrow-top-right"></span><em> icon-arrow-top-right</em></li>
                                                        <li><span class="icon-arrow-top-left"></span><em> icon-arrow-top-left</em></li>
                                                        <li><span class="icon-arrow-circle-up"></span><em> icon-arrow-circle-up</em></li>
                                                        <li><span class="icon-arrow-circle-right"></span><em> icon-arrow-circle-right</em></li>
                                                        <li><span class="icon-arrow-circle-left"></span><em> icon-arrow-circle-left</em></li>
                                                        <li><span class="icon-arrow-circle-down"></span><em> icon-arrow-circle-down</em></li>
                                                        <li><span class="icon-arrows-corner"></span><em> icon-arrows-corner</em></li>
                                                        <li><span class="icon-split-v"></span><em> icon-split-v</em></li>
                                                        <li><span class="icon-split-v-alt"></span><em> icon-split-v-alt</em></li>
                                                        <li><span class="icon-split-h"></span><em> icon-split-h</em></li>
                                                        <li><span class="icon-hand-point-up"></span><em> icon-hand-point-up</em></li>
                                                        <li><span class="icon-hand-point-right"></span><em> icon-hand-point-right</em></li>
                                                        <li><span class="icon-hand-point-left"></span><em> icon-hand-point-left</em></li>
                                                        <li><span class="icon-hand-point-down"></span><em> icon-hand-point-down</em></li>
                                                        <li><span class="icon-back-right"></span><em> icon-back-right</em></li>
                                                        <li><span class="icon-back-left"></span><em> icon-back-left</em></li>
                                                        <li><span class="icon-exchange-vertical"></span><em> icon-exchange-vertical</em></li>
                                                        <li><span class="icon-wand"></span><em> icon-wand</em></li>
                                                        <li><span class="icon-save"></span><em> icon-save</em></li>
                                                        <li><span class="icon-save-alt"></span><em> icon-save-alt</em></li>
                                                        <li><span class="icon-direction"></span><em> icon-direction</em></li>
                                                        <li><span class="icon-direction-alt"></span><em> icon-direction-alt</em></li>
                                                        <li><span class="icon-user"></span><em> icon-user</em></li>
                                                        <li><span class="icon-link"></span><em> icon-link</em></li>
                                                        <li><span class="icon-unlink"></span><em> icon-unlink</em></li>
                                                        <li><span class="icon-trash"></span><em> icon-trash</em></li>
                                                        <li><span class="icon-target"></span><em> icon-target</em></li>
                                                        <li><span class="icon-tag"></span><em> icon-tag</em></li>
                                                        <li><span class="icon-desktop"></span><em> icon-desktop</em></li>
                                                        <li><span class="icon-tablet"></span><em> icon-tablet</em></li>
                                                        <li><span class="icon-mobile"></span><em> icon-mobile</em></li>
                                                        <li><span class="icon-email"></span><em> icon-email</em></li>
                                                        <li><span class="icon-star"></span><em> icon-star</em></li>
                                                        <li><span class="icon-spray"></span><em> icon-spray</em></li>
                                                        <li><span class="icon-signal"></span><em> icon-signal</em></li>
                                                        <li><span class="icon-shopping-cart"></span><em> icon-shopping-cart</em></li>
                                                        <li><span class="icon-shopping-cart-full"></span><em> icon-shopping-cart-full</em></li>
                                                        <li><span class="icon-settings"></span><em> icon-settings</em></li>
                                                        <li><span class="icon-search"></span><em> icon-search</em></li>
                                                        <li><span class="icon-zoom-in"></span><em> icon-zoom-in</em></li>
                                                        <li><span class="icon-zoom-out"></span><em> icon-zoom-out</em></li>
                                                        <li><span class="icon-cut"></span><em> icon-cut</em></li>
                                                        <li><span class="icon-ruler"></span><em> icon-ruler</em></li>
                                                        <li><span class="icon-ruler-alt-2"></span><em> icon-ruler-alt-2</em></li>
                                                        <li><span class="icon-ruler-pencil"></span><em> icon-ruler-pencil</em></li>
                                                        <li><span class="icon-ruler-alt"></span><em> icon-ruler-alt</em></li>
                                                        <li><span class="icon-bookmark"></span><em> icon-bookmark</em></li>
                                                        <li><span class="icon-bookmark-alt"></span><em> icon-bookmark-alt</em></li>
                                                        <li><span class="icon-reload"></span><em> icon-reload</em></li>
                                                        <li><span class="icon-plus"></span><em> icon-plus</em></li>
                                                        <li><span class="icon-minus"></span><em> icon-minus</em></li>
                                                        <li><span class="icon-close"></span><em> icon-close</em></li>
                                                        <li><span class="icon-pin"></span><em> icon-pin</em></li>
                                                        <li><span class="icon-pencil"></span><em> icon-pencil</em></li>
                                                        <li><span class="icon-pencil-alt"></span><em> icon-pencil-alt</em></li>
                                                        <li><span class="icon-paint-roller"></span><em> icon-paint-roller</em></li>
                                                        <li><span class="icon-paint-bucket"></span><em> icon-paint-bucket</em></li>
                                                        <li><span class="icon-na"></span><em> icon-na</em></li>
                                                        <li><span class="icon-medall"></span><em> icon-medall</em></li>
                                                        <li><span class="icon-medall-alt"></span><em> icon-medall-alt</em></li>
                                                        <li><span class="icon-marker"></span><em> icon-marker</em></li>
                                                        <li><span class="icon-marker-alt"></span><em> icon-marker-alt</em></li>
                                                        <li><span class="icon-lock"></span><em> icon-lock</em></li>
                                                        <li><span class="icon-unlock"></span><em> icon-unlock</em></li>
                                                        <li><span class="icon-location-arrow"></span><em> icon-location-arrow</em></li>
                                                        <li><span class="icon-layout"></span><em> icon-layout</em></li>
                                                        <li><span class="icon-layers"></span><em> icon-layers</em></li>
                                                        <li><span class="icon-layers-alt"></span><em> icon-layers-alt</em></li>
                                                        <li><span class="icon-key"></span><em> icon-key</em></li>
                                                        <li><span class="icon-image"></span><em> icon-image</em></li>
                                                        <li><span class="icon-heart"></span><em> icon-heart</em></li>
                                                        <li><span class="icon-heart-broken"></span><em> icon-heart-broken</em></li>
                                                        <li><span class="icon-hand-stop"></span><em> icon-hand-stop</em></li>
                                                        <li><span class="icon-hand-open"></span><em> icon-hand-open</em></li>
                                                        <li><span class="icon-hand-drag"></span><em> icon-hand-drag</em></li>
                                                        <li><span class="icon-flag"></span><em> icon-flag</em></li>
                                                        <li><span class="icon-flag-alt"></span><em> icon-flag-alt</em></li>
                                                        <li><span class="icon-flag-alt-2"></span><em> icon-flag-alt-2</em></li>
                                                        <li><span class="icon-eye"></span><em> icon-eye</em></li>
                                                        <li><span class="icon-import"></span><em> icon-import</em></li>
                                                        <li><span class="icon-export"></span><em> icon-export</em></li>
                                                        <li><span class="icon-cup"></span><em> icon-cup</em></li>
                                                        <li><span class="icon-crown"></span><em> icon-crown</em></li>
                                                        <li><span class="icon-comments"></span><em> icon-comments</em></li>
                                                        <li><span class="icon-comment"></span><em> icon-comment</em></li>
                                                        <li><span class="icon-comment-alt"></span><em> icon-comment-alt</em></li>
                                                        <li><span class="icon-thought"></span><em> icon-thought</em></li>
                                                        <li><span class="icon-clip"></span><em> icon-clip</em></li>
                                                        <li><span class="icon-check"></span><em> icon-check</em></li>
                                                        <li><span class="icon-check-box"></span><em> icon-check-box</em></li>
                                                        <li><span class="icon-camera"></span><em> icon-camera</em></li>
                                                        <li><span class="icon-announcement"></span><em> icon-announcement</em></li>
                                                        <li><span class="icon-brush"></span><em> icon-brush</em></li>
                                                        <li><span class="icon-brush-alt"></span><em> icon-brush-alt</em></li>
                                                        <li><span class="icon-palette"></span><em> icon-palette</em></li>
                                                        <li><span class="icon-briefcase"></span><em> icon-briefcase</em></li>
                                                        <li><span class="icon-bolt"></span><em> icon-bolt</em></li>
                                                        <li><span class="icon-bolt-alt"></span><em> icon-bolt-alt</em></li>
                                                        <li><span class="icon-blackboard"></span><em> icon-blackboard</em></li>
                                                        <li><span class="icon-bag"></span><em> icon-bag</em></li>
                                                        <li><span class="icon-world"></span><em> icon-world</em></li>
                                                        <li><span class="icon-wheelchair"></span><em> icon-wheelchair</em></li>
                                                        <li><span class="icon-car"></span><em> icon-car</em></li>
                                                        <li><span class="icon-truck"></span><em> icon-truck</em></li>
                                                        <li><span class="icon-timer"></span><em> icon-timer</em></li>
                                                        <li><span class="icon-ticket"></span><em> icon-ticket</em></li>
                                                        <li><span class="icon-thumb-up"></span><em> icon-thumb-up</em></li>
                                                        <li><span class="icon-thumb-down"></span><em> icon-thumb-down</em></li>
                                                        <li><span class="icon-stats-up"></span><em> icon-stats-up</em></li>
                                                        <li><span class="icon-stats-down"></span><em> icon-stats-down</em></li>
                                                        <li><span class="icon-shine"></span><em> icon-shine</em></li>
                                                        <li><span class="icon-shift-right"></span><em> icon-shift-right</em></li>
                                                        <li><span class="icon-shift-left"></span><em> icon-shift-left</em></li>
                                                        <li><span class="icon-shift-right-alt"></span><em> icon-shift-right-alt</em></li>
                                                        <li><span class="icon-shift-left-alt"></span><em> icon-shift-left-alt</em></li>
                                                        <li><span class="icon-shield"></span><em> icon-shield</em></li>
                                                        <li><span class="icon-notepad"></span><em> icon-notepad</em></li>
                                                        <li><span class="icon-server"></span><em> icon-server</em></li>
                                                        <li><span class="icon-pulse"></span><em> icon-pulse</em></li>
                                                        <li><span class="icon-printer"></span><em> icon-printer</em></li>
                                                        <li><span class="icon-power-off"></span><em> icon-power-off</em></li>
                                                        <li><span class="icon-plug"></span><em> icon-plug</em></li>
                                                        <li><span class="icon-pie-chart"></span><em> icon-pie-chart</em></li>
                                                        <li><span class="icon-panel"></span><em> icon-panel</em></li>
                                                        <li><span class="icon-package"></span><em> icon-package</em></li>
                                                        <li><span class="icon-music"></span><em> icon-music</em></li>
                                                        <li><span class="icon-music-alt"></span><em> icon-music-alt</em></li>
                                                        <li><span class="icon-mouse"></span><em> icon-mouse</em></li>
                                                        <li><span class="icon-mouse-alt"></span><em> icon-mouse-alt</em></li>
                                                        <li><span class="icon-money"></span><em> icon-money</em></li>
                                                        <li><span class="icon-microphone"></span><em> icon-microphone</em></li>
                                                        <li><span class="icon-menu"></span><em> icon-menu</em></li>
                                                        <li><span class="icon-menu-alt"></span><em> icon-menu-alt</em></li>
                                                        <li><span class="icon-map"></span><em> icon-map</em></li>
                                                        <li><span class="icon-map-alt"></span><em> icon-map-alt</em></li>
                                                        <li><span class="icon-location-pin"></span><em> icon-location-pin</em></li>
                                                        <li><span class="icon-light-bulb"></span><em> icon-light-bulb</em></li>
                                                        <li><span class="icon-info"></span><em> icon-info</em></li>
                                                        <li><span class="icon-infinite"></span><em> icon-infinite</em></li>
                                                        <li><span class="icon-id-badge"></span><em> icon-id-badge</em></li>
                                                        <li><span class="icon-hummer"></span><em> icon-hummer</em></li>
                                                        <li><span class="icon-home"></span><em> icon-home</em></li>
                                                        <li><span class="icon-help"></span><em> icon-help</em></li>
                                                        <li><span class="icon-headphone"></span><em> icon-headphone</em></li>
                                                        <li><span class="icon-harddrives"></span><em> icon-harddrives</em></li>
                                                        <li><span class="icon-harddrive"></span><em> icon-harddrive</em></li>
                                                        <li><span class="icon-gift"></span><em> icon-gift</em></li>
                                                        <li><span class="icon-game"></span><em> icon-game</em></li>
                                                        <li><span class="icon-filter"></span><em> icon-filter</em></li>
                                                        <li><span class="icon-files"></span><em> icon-files</em></li>
                                                        <li><span class="icon-file"></span><em> icon-file</em></li>
                                                        <li><span class="icon-zip"></span><em> icon-zip</em></li>
                                                        <li><span class="icon-folder"></span><em> icon-folder</em></li>
                                                        <li><span class="icon-envelope"></span><em> icon-envelope</em></li>
                                                        <li><span class="icon-dashboard"></span><em> icon-dashboard</em></li>
                                                        <li><span class="icon-cloud"></span><em> icon-cloud</em></li>
                                                        <li><span class="icon-cloud-up"></span><em> icon-cloud-up</em></li>
                                                        <li><span class="icon-cloud-down"></span><em> icon-cloud-down</em></li>
                                                        <li><span class="icon-clipboard"></span><em> icon-clipboard</em></li>
                                                        <li><span class="icon-calendar"></span><em> icon-calendar</em></li>
                                                        <li><span class="icon-book"></span><em> icon-book</em></li>
                                                        <li><span class="icon-bell"></span><em> icon-bell</em></li>
                                                        <li><span class="icon-basketball"></span><em> icon-basketball</em></li>
                                                        <li><span class="icon-bar-chart"></span><em> icon-bar-chart</em></li>
                                                        <li><span class="icon-bar-chart-alt"></span><em> icon-bar-chart-alt</em></li>
                                                        <li><span class="icon-archive"></span><em> icon-archive</em></li>
                                                        <li><span class="icon-anchor"></span><em> icon-anchor</em></li>
                                                        <li><span class="icon-alert"></span><em> icon-alert</em></li>
                                                        <li><span class="icon-alarm-clock"></span><em> icon-alarm-clock</em></li>
                                                        <li><span class="icon-agenda"></span><em> icon-agenda</em></li>
                                                        <li><span class="icon-write"></span><em> icon-write</em></li>
                                                        <li><span class="icon-wallet"></span><em> icon-wallet</em></li>
                                                        <li><span class="icon-video-clapper"></span><em> icon-video-clapper</em></li>
                                                        <li><span class="icon-video-camera"></span><em> icon-video-camera</em></li>
                                                        <li><span class="icon-vector"></span><em> icon-vector</em></li>
                                                        <li><span class="icon-support"></span><em> icon-support</em></li>
                                                        <li><span class="icon-stamp"></span><em> icon-stamp</em></li>
                                                        <li><span class="icon-slice"></span><em> icon-slice</em></li>
                                                        <li><span class="icon-shortcode"></span><em> icon-shortcode</em></li>
                                                        <li><span class="icon-receipt"></span><em> icon-receipt</em></li>
                                                        <li><span class="icon-pin2"></span><em> icon-pin2</em></li>
                                                        <li><span class="icon-pin-alt"></span><em> icon-pin-alt</em></li>
                                                        <li><span class="icon-pencil-alt2"></span><em> icon-pencil-alt2</em></li>
                                                        <li><span class="icon-eraser"></span><em> icon-eraser</em></li>
                                                        <li><span class="icon-more"></span><em> icon-more</em></li>
                                                        <li><span class="icon-more-alt"></span><em> icon-more-alt</em></li>
                                                        <li><span class="icon-microphone-alt"></span><em> icon-microphone-alt</em></li>
                                                        <li><span class="icon-magnet"></span><em> icon-magnet</em></li>
                                                        <li><span class="icon-line-double"></span><em> icon-line-double</em></li>
                                                        <li><span class="icon-line-dotted"></span><em> icon-line-dotted</em></li>
                                                        <li><span class="icon-line-dashed"></span><em> icon-line-dashed</em></li>
                                                        <li><span class="icon-ink-pen"></span><em> icon-ink-pen</em></li>
                                                        <li><span class="icon-info-alt"></span><em> icon-info-alt</em></li>
                                                        <li><span class="icon-help-alt"></span><em> icon-help-alt</em></li>
                                                        <li><span class="icon-headphone-alt"></span><em> icon-headphone-alt</em></li>
                                                        <li><span class="icon-gallery"></span><em> icon-gallery</em></li>
                                                        <li><span class="icon-face-smile"></span><em> icon-face-smile</em></li>
                                                        <li><span class="icon-face-sad"></span><em> icon-face-sad</em></li>
                                                        <li><span class="icon-credit-card"></span><em> icon-credit-card</em></li>
                                                        <li><span class="icon-comments-smiley"></span><em> icon-comments-smiley</em></li>
                                                        <li><span class="icon-time"></span><em> icon-time</em></li>
                                                        <li><span class="icon-share"></span><em> icon-share</em></li>
                                                        <li><span class="icon-share-alt"></span><em> icon-share-alt</em></li>
                                                        <li><span class="icon-rocket"></span><em> icon-rocket</em></li>
                                                        <li><span class="icon-new-window"></span><em> icon-new-window</em></li>
                                                        <li><span class="icon-rss"></span><em> icon-rss</em></li>
                                                        <li><span class="icon-rss-alt"></span><em> icon-rss-alt</em></li>
                                                        <li><span class="icon-control-stop"></span><em> icon-control-stop</em></li>
                                                        <li><span class="icon-control-shuffle"></span><em> icon-control-shuffle</em></li>
                                                        <li><span class="icon-control-play"></span><em> icon-control-play</em></li>
                                                        <li><span class="icon-control-pause"></span><em> icon-control-pause</em></li>
                                                        <li><span class="icon-control-forward"></span><em> icon-control-forward</em></li>
                                                        <li><span class="icon-control-backward"></span><em> icon-control-backward</em></li>
                                                        <li><span class="icon-volume"></span><em> icon-volume</em></li>
                                                        <li><span class="icon-control-skip-forward"></span><em> icon-control-skip-forward</em></li>
                                                        <li><span class="icon-control-skip-backward"></span><em> icon-control-skip-backward</em></li>
                                                        <li><span class="icon-control-record"></span><em> icon-control-record</em></li>
                                                        <li><span class="icon-control-eject"></span><em> icon-control-eject</em></li>
                                                        <li><span class="icon-paragraph"></span><em> icon-paragraph</em></li>
                                                        <li><span class="icon-uppercase"></span><em> icon-uppercase</em></li>
                                                        <li><span class="icon-underline"></span><em> icon-underline</em></li>
                                                        <li><span class="icon-text"></span><em> icon-text</em></li>
                                                        <li><span class="icon-Italic"></span><em> icon-Italic</em></li>
                                                        <li><span class="icon-smallcap"></span><em> icon-smallcap</em></li>
                                                        <li><span class="icon-list"></span><em> icon-list</em></li>
                                                        <li><span class="icon-list-ol"></span><em> icon-list-ol</em></li>
                                                        <li><span class="icon-align-right"></span><em> icon-align-right</em></li>
                                                        <li><span class="icon-align-left"></span><em> icon-align-left</em></li>
                                                        <li><span class="icon-align-justify"></span><em> icon-align-justify</em></li>
                                                        <li><span class="icon-align-center"></span><em> icon-align-center</em></li>
                                                        <li><span class="icon-quote-right"></span><em> icon-quote-right</em></li>
                                                        <li><span class="icon-quote-left"></span><em> icon-quote-left</em></li>
                                                        <li><span class="icon-flickr"></span><em> icon-flickr</em></li>
                                                        <li><span class="icon-flickr-alt"></span><em> icon-flickr-alt</em></li>
                                                        <li><span class="icon-instagram"></span><em> icon-instagram</em></li>
                                                        <li><span class="icon-google"></span><em> icon-google</em></li>
                                                        <li><span class="icon-github"></span><em> icon-github</em></li>
                                                        <li><span class="icon-facebook"></span><em> icon-facebook</em></li>
                                                        <li><span class="icon-dropbox"></span><em> icon-dropbox</em></li>
                                                        <li><span class="icon-dropbox-alt"></span><em> icon-dropbox-alt</em></li>
                                                        <li><span class="icon-dribbble"></span><em> icon-dribbble</em></li>
                                                        <li><span class="icon-apple"></span><em> icon-apple</em></li>
                                                        <li><span class="icon-android"></span><em> icon-android</em></li>
                                                        <li><span class="icon-yahoo"></span><em> icon-yahoo</em></li>
                                                        <li><span class="icon-trello"></span><em> icon-trello</em></li>
                                                        <li><span class="icon-stack-overflow"></span><em> icon-stack-overflow</em></li>
                                                        <li><span class="icon-soundcloud"></span><em> icon-soundcloud</em></li>
                                                        <li><span class="icon-sharethis"></span><em> icon-sharethis</em></li>
                                                        <li><span class="icon-sharethis-alt"></span><em> icon-sharethis-alt</em></li>
                                                        <li><span class="icon-reddit"></span><em> icon-reddit</em></li>
                                                        <li><span class="icon-microsoft"></span><em> icon-microsoft</em></li>
                                                        <li><span class="icon-microsoft-alt"></span><em> icon-microsoft-alt</em></li>
                                                        <li><span class="icon-linux"></span><em> icon-linux</em></li>
                                                        <li><span class="icon-jsfiddle"></span><em> icon-jsfiddle</em></li>
                                                        <li><span class="icon-joomla"></span><em> icon-joomla</em></li>
                                                        <li><span class="icon-html5"></span><em> icon-html5</em></li>
                                                        <li><span class="icon-css3"></span><em> icon-css3</em></li>
                                                        <li><span class="icon-drupal"></span><em> icon-drupal</em></li>
                                                        <li><span class="icon-wordpress"></span><em> icon-wordpress</em></li>
                                                        <li><span class="icon-tumblr"></span><em> icon-tumblr</em></li>
                                                        <li><span class="icon-tumblr-alt"></span><em> icon-tumblr-alt</em></li>
                                                        <li><span class="icon-skype"></span><em> icon-skype</em></li>
                                                        <li><span class="icon-youtube"></span><em> icon-youtube</em></li>
                                                        <li><span class="icon-vimeo"></span><em> icon-vimeo</em></li>
                                                        <li><span class="icon-vimeo-alt"></span><em> icon-vimeo-alt</em></li>
                                                        <li><span class="icon-twitter"></span><em> icon-twitter</em></li>
                                                        <li><span class="icon-twitter-alt"></span><em> icon-twitter-alt</em></li>
                                                        <li><span class="icon-linkedin"></span><em> icon-linkedin</em></li>
                                                        <li><span class="icon-pinterest"></span><em> icon-pinterest</em></li>
                                                        <li><span class="icon-pinterest-alt"></span><em> icon-pinterest-alt</em></li>
                                                        <li><span class="icon-themify-logo"></span><em> icon-themify-logo</em></li>
                                                        <li><span class="icon-themify-favicon"></span><em> icon-themify-favicon</em></li>
                                                        <li><span class="icon-themify-favicon-alt"></span><em> icon-themify-favicon-alt</em></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-5 order-1 order-xl-2" id="myScrollspy">
                                    <div class="button-generator-bx custom-scrollbar">
                                        <div class="box button-preview" data-spy="affix" data-offset-top="248">
                                            <h2>Bootstrap Button Preview</h2>
                                            <div class="bg-transparent" id="result">
                                                <a class="btn btn-success btn-lg" href="javascript:void(0)"><span class="fa fa-edit"></span> Button</a>
                                            </div>
                                        </div>
                                        <div class="box" id="htmlBox">
                                            <div class="code-wrapper bg-transparent">
                                                <pre class="well"><code class="language-markup button-html" id="htmlCode">&lt;a href="javascript:void(0)" class="btn btn-success 
    btn-lg"&gt;&lt;i class="icon-edit 
    icon-white"&gt;&lt;/i&gt; Bootstrap 
    Button Generator&lt;/a&gt;</code></pre>
                                                <div class="copy"><a id="copyHTML" href="javascript:void(0);" data-clipboard-action="copy" data-clipboard-target="#htmlCode">Click Here to Copy HTML</a></div>
                                                <p class="sucess-msg" id="htmlAlert"><em>Copied to clipboard...</em></p>
                                            </div>
                                        </div>
                                        <div id="cssBox">
                                            <div class="box">
                                                <div class="code-wrapper bg-transparent">
                                                    <div class="copy mt-0 m-b-20"><a id="copyCSS" href="javascript:void(0);" data-clipboard-action="copy" data-clipboard-target="#cssCode">Click Here to Copy CSS</a></div>
                                                    <pre class="well"><code class="language-css button-css" id="cssCode">.btn.btn-success {
    color: #ffffff;
    background-color: #00c292;
    background-image: linear-gradient(to bottom, #00c292, #00ebb1);
    border-color: #00c292 #00c292 #00c292;
    }
    .btn.btn-success:hover {
    color: #ffffff;
    background-color: #00ebb1;
    background-image: linear-gradient(to bottom, #00ebb1, #00ebb1);
    border-color: #00c292 #00c292 #00c292;
    }</code></pre>
                                                    <p class="sucess-msg" id="cssAlert"><em>Copied to clipboard...</em></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <?php $__env->startPush('scripts'); ?> 
    <script>
        var body = document.body;
        body.classList.add("button-builder");
    </script>
    <script src="<?php echo e(asset('assets/js/button-builder/colorpicker.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/button-builder/clipboard.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/button-builder/generator.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/button-builder/extend-1.0.js')); ?>"></script>
	<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Project12_7\Run Capital Group\resources\views/admin/builders/button-builder.blade.php ENDPATH**/ ?>