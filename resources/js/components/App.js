import React from 'react';
import ReactDOM from 'react-dom';

function App() {
    return (
        <div className="container">
            <h2>Hello from this side!</h2>
        </div>
    );
}

export default App;

if (document.getElementById('app')) {
    ReactDOM.render(<App />, document.getElementById('app'));
}
