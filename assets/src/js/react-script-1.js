import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class AppOne extends React.Component { 
    handleClick(e) { 
        console.log('Running React App 1'); 
        alert('Running React App 1');
    }

    render() {
        return (
            <div className="app-content container">
                <h1 className="jumbotron">React App 1 Works!</h1>
                <article>
                    <h3>Bootstrap 4 Added - Updated 21 Oct 2018</h3>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate eos fugiat
                        vel necessitatibus dolores molestiae quas, praesentium similique, est minima
                        consequatur sit aspernatur nostrum nulla et maxime maiores distinctio possimus!
                    </p>
                    <button className="btn btn-danger" onClick={this.handleClick}>Click Works!</button>

                </article>
            </div>
        )
    }
} ReactDOM.render(<AppOne/>, document.getElementById('app1'));