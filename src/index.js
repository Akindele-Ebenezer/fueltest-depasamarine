import React from 'react';
import ReactDOM from 'react-dom'; 
import Header from './Header/Header'; 
import Login from './Login/Login'; 


const Page = () => { 
 
  const logIn = (
    <> 
      <Login authParagraph1 = "Don't have an account? " authHeading = 'Log In' authButton1 = 'Sign Up' authButton2 = 'Log In' />
    </>
  )

    return ( 
      <>
        <Header />
        <Login authParagraph1 = "Already have an account?" authHeading = 'Sign Up' authButton1 = 'Log In' authButton2 = 'Sign Up' /> 
      </> 

    )
}

ReactDOM.render(<Page />, document.querySelector("#root")); 
