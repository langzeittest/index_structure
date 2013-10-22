<?php

if (!defined('PHORUM')) return;

//
// Set index structure to opposite for folders. Root keeps his structure.
//
function mod_index_structure_common_pre() {
    global $PHORUM;

    if (isset($PHORUM['use_new_folder_style']) && isset($PHORUM['forum_id']) && $PHORUM['forum_id'] > 0) {
        $PHORUM['use_new_folder_style'] = (int) !$PHORUM['use_new_folder_style'];
    }

}

?>