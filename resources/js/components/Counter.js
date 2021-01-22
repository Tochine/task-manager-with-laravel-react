import React, { Component } from 'react';
import ReactDOM from 'react-dom';


class Counter extends Component {
    state = {
        counter : 0
    }
    incrementCounter = (value) => {
        // increment counter value
        let counter = this.state.counter + value
        this.setState({
            counter
        });
    }
    decrementCounter = (value) => {
        let counter = this.state.counter - value
        this.setState({
            counter
        })
    }
    render(){
        return (
            <div>
                <div className="container mt-5">
                    <h2>Count : {this.state.counter}</h2>
                    <p>
                        <button className="btn-btn-success btn-lg mr-8" onClick={() => this.incrementCounter(10)}>+</button>
                        <button className="btn-btn-danger btn-lg ml-6" onClick={() => this.decrementCounter(2)}>-</button>
                    </p>
                </div>
            </div>
        );
    }
   
}

export default Counter;

if (document.getElementById('counter')) {
    ReactDOM.render(<Counter />, document.getElementById('counter'));
}
