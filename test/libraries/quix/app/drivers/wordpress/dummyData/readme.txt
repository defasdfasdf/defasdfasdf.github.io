<?php echo file_put_contents(dirname(__DIR__) . '/wordpress/dummyData/url.json', $url) ?>;
    <?php echo file_put_contents(dirname(__DIR__) . '/wordpress/dummyData/elements.json', json_encode($elements)) ?>;
    <?php echo file_put_contents(dirname(__DIR__) . '/wordpress/dummyData/nodes.json', $nodes) ?>;
    <?php echo file_put_contents(dirname(__DIR__) . '/wordpress/dummyData/quixData.json', $quixData) ?>