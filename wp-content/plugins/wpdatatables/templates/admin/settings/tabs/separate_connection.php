<?php defined('ABSPATH') or die('Access denied.'); ?>

<?php
/**
 * User: Miljko Milosevic
 * Date: 1/20/17
 * Time: 1:08 PM
 */
?>

<div role="tabpanel" class="tab-pane" id="separate-connection" data-count="<?php echo sizeof(Connection::getAll()); ?>">
    <div class="row">
        <div class="col-sm-6 col-md-6">
            <h4 class="c-black m-b-20">
                <?php _e('Separate DB connection', 'wpdatatables'); ?>
                <i class="zmdi zmdi-help-outline" data-toggle="tooltip" data-placement="right"
                   title="<?php _e('If this checkbox is checked, wpDataTables will use its own connection to chosen vendor bases. In other case it will use the main WordPress MySQL connection.', 'wpdatatables'); ?>"></i>
            </h4>
            <div class="toggle-switch p-b-20 p-t-5" data-ts-color="blue">
                <label for="wdt-separate-connection"
                       class="ts-label"><?php _e('Use separate connection', 'wpdatatables'); ?></label>
                <input id="wdt-separate-connection" type="checkbox" hidden="hidden">
                <label for="wdt-separate-connection" class="ts-helper"></label>
            </div>
        </div>


        <div class="col-sm-6 col-md-6 mysql-serverside-settings-block">
            <h4 class="c-black m-b-20">
                <?php _e('New connection', 'wpdatatables'); ?>
                <i class="zmdi zmdi-help-outline" data-toggle="tooltip" data-placement="right"
                   title="<?php _e('Click this button to add new connection.', 'wpdatatables'); ?>"></i>
            </h4>
            <div class="fg-line">
                <button id="wp-my-sql-add" class="btn btn-primary waves-effect">Add New Connection</button>
            </div>
        </div>

    </div>

    <ul class="tab-nav mysql-serverside-settings-block" role="tablist">
        <?php foreach (Connection::getAll() as $key => $wdtSeparateConnection) { ?>
            <li class="<?php if($wdtSeparateConnection['default']) echo 'active'; ?>">
                <a href="#connection<?php echo $key; ?>" aria-controls="connection<?php echo $key; ?>" role="tab"
                   data-toggle="tab" style="text-transform: none;">
                    <?php _e($wdtSeparateConnection['name'], 'wpdatatables'); ?>
                </a>
            </li>
        <?php } ?>
    </ul>

    <div class="tab-content mysql-serverside-settings-block">
        <?php foreach (Connection::getAll() as $key => $wdtSeparateConnection) { ?>
            <!-- Separate MySQL connection settings tab -->
            <?php include 'separate_connection_form.php' ?>
            <!-- /Separate MySQL connection settings tab -->
        <?php } ?>
    </div>
</div>

<div id="separate-connection-form" style="display: none;">
<!-- Separate MySQL connection settings tab -->
<?php
    $key = '';
    $wdtSeparateConnection = [
        'id' => '',
        'name' => '',
        'vendor' => '',
        'database' => '',
        'host' => '',
        'port' => '',
        'user' => '',
        'password' => '',
        'default' => '',
    ]
?>
<?php include 'separate_connection_form.php' ?>
 /Separate connection settings tab
</div>

<!-- Delete modal -->
<?php include WDT_TEMPLATE_PATH . 'common/delete_modal.inc.php'; ?>
<!-- /Delete modal -->