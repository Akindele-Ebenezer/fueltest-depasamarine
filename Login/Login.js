import "./Login.css";

const Login = () => {
    return (
        <div className="Login-Wrapper">
            <div className='Login-Wrapper-First'>
                <img src="used-cars-3.jpeg" alt="" />
            </div>
            <div>
                <div className="Auth">
                    <h1>LOG IN</h1> 
                    <br />
                    <br /> 
                    <input type="email" name="email" placeholder="Enter Email.."/>
                    <br />
                    <input type="password" name="password" placeholder="Password.." />
                    <br />
                    <button type="submit">Log In</button>                  
                    <br />
                    <p>Don't have an account? Create account</p>
                </div>
            </div>
        </div>
    )
}

export default Login;