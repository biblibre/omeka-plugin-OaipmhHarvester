<?php
/**
 * Configuration form include.
 * 
 * @package OaipmhHarvester
 * @subpackage Views
 * @copyright Copyright (c) 2009 Center for History and New Media
 * @license http://www.gnu.org/licenses/gpl-3.0.txt
 */
?>
<div class="field">
    <label for="oaipmh_harvester_memory_limit">Memory Limit</label>
    <div class="inputs">
        <?php echo __v()->formText('oaipmh_harvester_memory_limit', $memoryLimit, null);?>
        <p class="explanation">Set a memory limit to avoid memory allocation errors 
        during harvesting. <strong>We recommend that you choose a high memory limit.</strong> 
        Examples include 128M, 1G, and -1. The available options are K (for 
        Kilobytes), M (for Megabytes) and G (for Gigabytes). Anything else assumes 
        bytes. Set to -1 for an infinite limit. Be advised that many web hosts set a 
        maximum memory limit, so this setting may be ignored if it exceeds the 
        maximum allowable limit. Check with your web host for more information.</p>
    </div>
</div>