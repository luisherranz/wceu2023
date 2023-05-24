const Comp = () => {
	const [ isOpen, setIsOpen ] = useState( false );

	useEffect( () => {
		// Log the value of `isOpen` each time it changes.
		console.log( `Is Open: ${ isOpen }` );
	}, [ isOpen ] );

	const toggle = () => {
		setIsOpen( ! isOpen );
	};

	return (
		<div>
			<button
				onClick={ toggle }
				aria-expanded={ isOpen }
				aria-controls="panel-1"
			>
				Toggle
			</button>

			{ isOpen && 
				<p id="panel-1">
					This element is now visible!
				</p> 
			}
		</div>
	);
};
