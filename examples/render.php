<div
  data-wp-context='{ "isOpen": false }'
  data-wp-watch="callbacks.logIsOpen"
>
  <button
    data-wp-on--click="actions.toggle"
    data-wp-bind--aria-expanded="context.isOpen"
    aria-controls="panel-1"
  >
    Toggle
  </button>

  <p id="panel-1" data-wp-hidden="!context.isOpen">
    This element is now visible!
  </p>
</div>
