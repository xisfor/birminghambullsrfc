## Approach

Trying to keep this simple for hand editing.

Each coloured block is a `<section />`, and using helper classes to modify its look.

In general,

- You want each `section` to declare its colour, and its padding space.
- You normally want a `container` div to constrain the width.
- You normally want a `content` div to provide default text styles.

Example: Red background style, padding top and padding bottom of 15px, with max width and well spaced content text.

```html
<section class="bg-red pt-15 pb-15">
  <div class="container content">
    <h2>Training</h2>
    <p>You should come!</p>
  </div>
</section>
```

## Development

run in the `/public` folder

> `php -S localhost:8000`
