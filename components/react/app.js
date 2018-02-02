// React app.js document

import React from 'react';
import ReactDOM from 'react-dom';

var MainInterface = React.createClass({ 
	getInitialState: function() {
		return {
			
			
			myString: 'Hello from inside React'
		} // return 
	}, // getInitialState  
	
	render: function() {
		return (
			<section>
				<h2>Hello from React</h2> 
			</section>
		) // return
	} // render
});  // MainInterface



ReactDOM.render(
	<MainInterface />,
	document.getElementById('reactTest')
); // render


