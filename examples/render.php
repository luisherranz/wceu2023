<div
  data-wp-context='{ "isOpen": false }'
  data-wp-effect="effects.logIsOpen"
>
  <button
    data-wp-on--click="actions.toggle"
    data-wp-bind--aria-expanded="context.isOpen"
    aria-controls="panel-1"
  >
    Toggle
  </button>

  <p id="panel-1" data-wp-show="context.isOpen">
    This element is now visible!
  </p>
</div>