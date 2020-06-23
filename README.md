# Storyteller

A modern and simple Ghost blog theme for story writers. [DEMO](https://storyteller.demo.whitedigit.net/)

## Installation

Download compressed package, then "Admin > Design > Upload > Activate".


## Configure Disqus Comment

Open "partials > comments-disqus.hbs", find this line and replace "your-blog-name-here" with your blog's Disqus name. 

```javascript
s.src = 'https://your-blog-name-here.disqus.com/embed.js';
```

Open "post.hbs", Uncomment disqus comment.

```html
{{!-- {{> comments-disqus}} --}}
```

to

```html
{{> comments-disqus}}
```

Re-pack the folder and upload in Ghost admin.

## Configure Facebook Comment

Open "partials > comments-facebook.hbs", find "YOUR_APP_ID" and replace with your facebook app id.  

Open "post.hbs", Uncomment facebook comment.

```html
{{!-- {{> comments-facebook}} --}}
```

to

```html
{{> comments-facebook}}
```

Re-pack the folder and upload in Ghost admin.

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
