import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import {
    BrowserRouter as Router,
    Switch,
    Route,
    Link
  } from "react-router-dom";

class App extends Component {
    state = {
        PUBLIC_URL: "/taskmanager/"   
    }
    
    render(){
        return (
            <Router>
                <div>
                    <nav>
                        <ul>
                            <li>
                                <Link to={`${this.state.PUBLIC_URL}`}>Home</Link>
                            </li>
                            <li>
                                <Link to={`${this.state.PUBLIC_URL}about`}>About</Link>
                            </li>
                            <li>
                                <Link to={`${this.state.PUBLIC_URL}users`}>Users</Link>
                            </li>
                        </ul>
                    </nav>

                    <Switch>
                        <Route path={`${this.state.PUBLIC_URL}about`}>
                            <About />
                        </Route>
                        <Route path={`${this.state.PUBLIC_URL}users`}>
                            <Users />
                        </Route>
                        <Route path={`${this.state.PUBLIC_URL}`}>
                            <Home />
                        </Route>
                    </Switch>
                 </div>
            </Router>
        );
    }
   
}

function Home() {
    return <h2>Home</h2>;
  }
  
  function About() {
    return <h2>About</h2>;
  }
  
  function Users() {
    return <h2>Users</h2>;
  }

export default App;

if (document.getElementById('app')) {
    ReactDOM.render(<App />, document.getElementById('app'));
}
