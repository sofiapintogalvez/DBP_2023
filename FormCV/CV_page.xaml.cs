using Xamarin.Forms;

namespace FormCV
{
    public partial class CV : ContentPage
    {
        public CV(string nombre, string apellido, string ocupacion, string correo, string telefono)
        {
            InitializeComponent();

            nombreLabel.Text = nombre;
            apellidoLabel.Text = apellido;
            ocupacionLabel.Text = ocupacion;
            correoLabel.Text = correo;
            telefonoLabel.Text = telefono;
        }
    }
}
