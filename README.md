# Prerequisites

- php
- composer
- npm

# Build

**dev**

`npm run watch`

**prod**

`npm run prod`

# Deploy

```sh
git add build_production && git commit -m "Build for deploy"
# use git subtrees for deployment
git subtree push --prefix build_production origin gh-pages
```