## Requirements

You'll need [Node.js][] version 6 or above. That's it!

## Quick start

Run the following at the terminal to get started:

```
npm install
npm start
```

At this point, you should be able to visit `http://localhost:8000` in
your browser and see the example page.

You can modify the page's HTML at `index.html`, or you can
edit its SASS at `sass/main.scss`.

Whenever you make changes to the SASS, it will automatically be
compiled to CSS, and you can reload the page in your web browser to
see the changes.

## Building the site

Run `npm run-script build` to generate the site's CSS.

## Deploying the site

You can deploy the site by copying all the files from the
root directory of the project to a static web server. You'll probably
want to exclude the `.git` and `node_modules` directories, though.

## Environment variables

* `PORT` defines the port for the development static file server to
  listen on. It defaults to `8000`.


## Based on

The structure and build set is directly based on [uswds](https://github.com/uswds/uswds/).
