import React from 'react';
import ReactDOM from 'react-dom'; 
import Header from './Header/Header'; 
import Login from './Login/Login';

const Page = () => {
    return ( 
      <>
        <Header />
        <Login />
      </>
    )
}

ReactDOM.render(<Page />, document.querySelector("#root")
); 
