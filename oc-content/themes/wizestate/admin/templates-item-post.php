<?php if ( (!defined('ABS_PATH')) ) exit('ABS_PATH is not loaded. Direct access is not allowed.'); ?>
<?php if ( !OC_ADMIN ) exit('User access is not allowed.'); ?>
<?php $locations_input_as = osc_get_preference('locations_input_as', 'osclasswizards_theme'); ?>
<h2 class="render-title"><?php _e('Item post page settings', OSCLASSWIZARDS_THEME_FOLDER); ?></h2>
<form action="<?php echo osc_admin_render_theme_url('oc-content/themes/'.OSCLASSWIZARDS_THEME_FOLDER.'/admin/settings.php'); ?>" method="post" class="nocsrf">
    <input type="hidden" name="action_specific" value="templates_item_post" />
    <fieldset>
        <div class="form-horizontal">
			<div class="form-row">
                <div class="form-label"><?php _e('Category multiple selects', OSCLASSWIZARDS_THEME_FOLDER); ?></div>
                <div class="form-controls">
					<div class="form-label-checkbox">
						<input type="checkbox" class="switch" name="category_multiple_selects" value="1" <?php echo (osc_esc_html( osc_get_preference('category_multiple_selects', 'osclasswizards_theme') ) == "1")? "checked": ""; ?>>
					</div>
				</div>
            </div>
		    <div class="form-row">
                <div class="form-label"><?php _e('Title min. length', OSCLASSWIZARDS_THEME_FOLDER); ?></div>
                <div class="form-controls"><input type="number" min="1" max="100" class="xlarge" name="title_minimum_length" value="<?php echo osc_esc_html( osc_get_preference('title_minimum_length', 'osclasswizards_theme') ); ?>"></div>
            </div>
		    <div class="form-row">
                <div class="form-label"><?php _e('Description min. length', OSCLASSWIZARDS_THEME_FOLDER); ?></div>
                <div class="form-controls"><input type="number" min="1" max="100" class="xlarge" name="description_minimum_length" value="<?php echo osc_esc_html( osc_get_preference('description_minimum_length', 'osclasswizards_theme') ); ?>"></div>
            </div>
            <div class="form-row">
                <div class="form-label"><?php _e('Locations input as', OSCLASSWIZARDS_THEME_FOLDER); ?></div>
                <div class="form-controls">
                    <select name="locations_input_as">
                        <option value="text" <?php if($locations_input_as == "text"){ echo "selected=selected"; } ?>><?php echo osc_esc_html(__('Auto-complete text',OSCLASSWIZARDS_THEME_FOLDER)); ?></option>
                        <option value="select" <?php if($locations_input_as == "select"){ echo "selected=selected"; } ?>><?php echo osc_esc_html(__('Drop-down select',OSCLASSWIZARDS_THEME_FOLDER)); ?></option>
                    </select>
                </div>
            </div>
			<div class="form-row">
                <div class="form-label"><?php _e('Locations required', OSCLASSWIZARDS_THEME_FOLDER); ?></div>
                <div class="form-controls">
					<div class="form-label-checkbox">
						<input type="checkbox" class="switch" name="locations_required" value="1" <?php echo (osc_esc_html( osc_get_preference('locations_required', 'osclasswizards_theme') ) == "1")? "checked": ""; ?>>
					</div>
				</div>
            </div>
		</div>
    </fieldset>

	<div class="form-actions">
		<input type="submit" value="<?php echo osc_esc_html(__('Save changes', OSCLASSWIZARDS_THEME_FOLDER)); ?>" class="btn btn-submit">
	</div>
</form>