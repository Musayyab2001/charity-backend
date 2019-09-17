var fs = require('fs'),
    args = require('system').args,
    page = require('webpage').create();

page.paperSize = { width: 1050, height: 1280, margin: '0px' };

page.open(args[1], function (status) {
    if (status !== 'success') {
        console.log('Unable to load the file!');
        phantom.exit(1);
    } else {
        window.setTimeout(function () {
            page.render(args[2]);
            phantom.exit();
        }, 200);
    }
});
