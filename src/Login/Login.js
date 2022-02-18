import fuelBg from '../images/fuel.jpg';
import "./Login.css";

const Login = (props) => {

    const show = props.authShow;
    const authParagraph1 = props.authParagraph1; 
    const authHeading = props.authHeading;
    const authButton1 = props.authButton1;
    const authButton2 = props.authButton2;
    const signUp = (
        <>        
            <label htmlFor="name">Name</label> <br />
            <input type="text" placeholder='Enter Name...'/> 
        </>
    );
 
 
    return (
        <div className="Login-Wrapper">
            <div style={{ backgroundImage: `url(${fuelBg})` }} className='Login-Wrapper-First'> 
            </div>
            <div>
                <div className="Auth">
                    <p>{authParagraph1} <button>{authButton1}</button></p>
                    <h1>{authHeading}</h1> 
                    <br />
                    <br /> 
                    {authHeading === `Sign Up` ? signUp : ``}
                    <br /> 
                    <label htmlFor="name">Email</label> <br />
                    <input type="email" name="email" placeholder="example@depasamarine.com"/>
                    <br />
                    <label htmlFor="name">Password</label> <br />
                    <input type="password" name="password" placeholder="8+ Characters.." />
                    <br />
                    <button type="submit">{authHeading}</button>                  
                    <br />
                </div>
            </div>
        </div>
    )
}

export default Login;